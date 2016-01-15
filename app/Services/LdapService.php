<?php namespace BookStack\Services;


use BookStack\Exceptions\LdapException;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * Class LdapService
 * Handles any app-specific LDAP tasks.
 * @package BookStack\Services
 */
class LdapService
{

    protected $ldap;
    protected $ldapConnection;
    protected $config;

    /**
     * LdapService constructor.
     * @param Ldap $ldap
     */
    public function __construct(Ldap $ldap)
    {
        $this->ldap = $ldap;
        $this->config = config('services.ldap');
    }

    /**
     * Get the details of a user from LDAP using the given username.
     * User found via configurable user filter.
     * @param $userName
     * @return array|null
     * @throws LdapException
     */
    public function getUserDetails($userName)
    {
        $ldapConnection = $this->getConnection();

        // Find user
        $userFilter = $this->buildFilter($this->config['user_filter'], ['user' => $userName]);
        $baseDn = $this->config['base_dn'];
        $users = $this->ldap->searchAndGetEntries($ldapConnection, $baseDn, $userFilter, ['cn', 'uid', 'dn', 'mail']);
        if ($users['count'] === 0) return null;

        $user = $users[0];
        return [
            'uid'   => $user['uid'][0],
            'name'  => $user['cn'][0],
            'dn'    => $user['dn'],
            'email' => (isset($user['mail'])) ? $user['mail'][0] : null
        ];
    }

    /**
     * @param Authenticatable $user
     * @param string          $username
     * @param string          $password
     * @return bool
     * @throws LdapException
     */
    public function validateUserCredentials(Authenticatable $user, $username, $password)
    {
        $ldapUser = $this->getUserDetails($username);
        if ($ldapUser === null) return false;
        if ($ldapUser['uid'] !== $user->external_auth_id) return false;

        $ldapConnection = $this->getConnection();
        try {
            $ldapBind = $this->ldap->bind($ldapConnection, $ldapUser['dn'], $password);
        } catch (\ErrorException $e) {
            $ldapBind = false;
        }

        return $ldapBind;
    }

    /**
     * Bind the system user to the LDAP connection using the given credentials
     * otherwise anonymous access is attempted.
     * @param $connection
     * @throws LdapException
     */
    protected function bindSystemUser($connection)
    {
        $ldapDn = $this->config['dn'];
        $ldapPass = $this->config['pass'];

        $isAnonymous = ($ldapDn === false || $ldapPass === false);
        if ($isAnonymous) {
            $ldapBind = $this->ldap->bind($connection);
        } else {
            $ldapBind = $this->ldap->bind($connection, $ldapDn, $ldapPass);
        }

        if (!$ldapBind) throw new LdapException('LDAP access failed using ' . $isAnonymous ? ' anonymous bind.' : ' given dn & pass details');
    }

    /**
     * Get the connection to the LDAP server.
     * Creates a new connection if one does not exist.
     * @return resource
     * @throws LdapException
     */
    protected function getConnection()
    {
        if ($this->ldapConnection !== null) return $this->ldapConnection;

        // Check LDAP extension in installed
        if (!function_exists('ldap_connect') && config('app.env') !== 'testing') {
            throw new LdapException('LDAP PHP extension not installed');
        }

        // Get port from server string if specified.
        $ldapServer = explode(':', $this->config['server']);
        $ldapConnection = $this->ldap->connect($ldapServer[0], count($ldapServer) > 1 ? $ldapServer[1] : 389);

        if ($ldapConnection === false) {
            throw new LdapException('Cannot connect to ldap server, Initial connection failed');
        }

        // Set any required options
        if ($this->config['version']) {
            $this->ldap->setOption($ldapConnection, LDAP_OPT_PROTOCOL_VERSION, $this->config['version']);
        }

        $this->ldapConnection = $ldapConnection;
        return $this->ldapConnection;
    }

    /**
     * Build a filter string by injecting common variables.
     * @param string $filterString
     * @param array $attrs
     * @return string
     */
    protected function buildFilter($filterString, array $attrs)
    {
        $newAttrs = [];
        foreach ($attrs as $key => $attrText) {
            $newKey = '${' . $key . '}';
            $newAttrs[$newKey] = $attrText;
        }
        return strtr($filterString, $newAttrs);
    }

}