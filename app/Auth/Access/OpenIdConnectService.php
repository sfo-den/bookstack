<?php namespace BookStack\Auth\Access;

use BookStack\Auth\User;
use BookStack\Exceptions\JsonDebugException;
use BookStack\Exceptions\OpenIdConnectException;
use BookStack\Exceptions\StoppedAuthenticationException;
use BookStack\Exceptions\UserRegistrationException;
use Exception;
use Lcobucci\JWT\Signer\Rsa\Sha256;
use Lcobucci\JWT\Token;
use OpenIDConnectClient\AccessToken;
use OpenIDConnectClient\OpenIDConnectProvider;

/**
 * Class OpenIdConnectService
 * Handles any app-specific OIDC tasks.
 */
class OpenIdConnectService
{
    protected $registrationService;
    protected $loginService;
    protected $config;

    /**
     * OpenIdService constructor.
     */
    public function __construct(RegistrationService $registrationService, LoginService $loginService)
    {
        $this->config = config('oidc');
        $this->registrationService = $registrationService;
        $this->loginService = $loginService;
    }

    /**
     * Initiate an authorization flow.
     * @return array{url: string, state: string}
     */
    public function login(): array
    {
        $provider = $this->getProvider();
        return [
            'url' => $provider->getAuthorizationUrl(),
            'state' => $provider->getState(),
        ];
    }

    /**
     * Process the Authorization response from the authorization server and
     * return the matching, or new if registration active, user matched to
     * the authorization server.
     * Returns null if not authenticated.
     * @throws Exception
     */
    public function processAuthorizeResponse(?string $authorizationCode): ?User
    {
        $provider = $this->getProvider();

        // Try to exchange authorization code for access token
        $accessToken = $provider->getAccessToken('authorization_code', [
            'code' => $authorizationCode,
        ]);

        return $this->processAccessTokenCallback($accessToken);
    }

    /**
     * Load the underlying OpenID Connect Provider.
     */
    protected function getProvider(): OpenIDConnectProvider
    {
        // Setup settings
        $settings = [
            'clientId' => $this->config['client_id'],
            'clientSecret' => $this->config['client_secret'],
            'idTokenIssuer' => $this->config['issuer'],
            'redirectUri' => url('/oidc/redirect'),
            'urlAuthorize' => $this->config['authorization_endpoint'],
            'urlAccessToken' => $this->config['token_endpoint'],
            'urlResourceOwnerDetails' => null,
            'publicKey' => $this->config['jwt_public_key'],
            'scopes' => 'profile email',
        ];

        // Setup services
        $services = [
            'signer' => new Sha256(),
        ];

        return new OpenIDConnectProvider($settings, $services);
    }

    /**
     * Calculate the display name
     */
    protected function getUserDisplayName(Token $token, string $defaultValue): string
    {
        $displayNameAttr = $this->config['display_name_claims'];

        $displayName = [];
        foreach ($displayNameAttr as $dnAttr) {
            $dnComponent = $token->claims()->get($dnAttr, '');
            if ($dnComponent !== '') {
                $displayName[] = $dnComponent;
            }
        }

        if (count($displayName) == 0) {
            $displayName[] = $defaultValue;
        }

        return implode(' ', $displayName);
    }

    /**
     * Extract the details of a user from an ID token.
     * @return array{name: string, email: string, external_id: string}
     */
    protected function getUserDetails(Token $token): array
    {
        $id = $token->claims()->get('sub');
        return [
            'external_id' => $id,
            'email' => $token->claims()->get('email'),
            'name' => $this->getUserDisplayName($token, $id),
        ];
    }

    /**
     * Processes a received access token for a user. Login the user when
     * they exist, optionally registering them automatically.
     * @throws OpenIdConnectException
     * @throws JsonDebugException
     * @throws UserRegistrationException
     * @throws StoppedAuthenticationException
     */
    protected function processAccessTokenCallback(AccessToken $accessToken): User
    {
        $userDetails = $this->getUserDetails($accessToken->getIdToken());
        $isLoggedIn = auth()->check();

        if ($this->config['dump_user_details']) {
            throw new JsonDebugException($accessToken->jsonSerialize());
        }

        if ($userDetails['email'] === null) {
            throw new OpenIdConnectException(trans('errors.oidc_no_email_address'));
        }

        if ($isLoggedIn) {
            throw new OpenIdConnectException(trans('errors.oidc_already_logged_in'), '/login');
        }

        $user = $this->registrationService->findOrRegister(
            $userDetails['name'], $userDetails['email'], $userDetails['external_id']
        );

        if ($user === null) {
            throw new OpenIdConnectException(trans('errors.oidc_user_not_registered', ['name' => $userDetails['external_id']]), '/login');
        }

        $this->loginService->login($user, 'oidc');
        return $user;
    }
}
