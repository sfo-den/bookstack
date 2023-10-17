<?php

namespace BookStack\Users\Controllers;

use BookStack\Access\SocialAuthService;
use BookStack\Http\Controller;
use BookStack\Permissions\PermissionApplicator;
use BookStack\Settings\UserNotificationPreferences;
use BookStack\Settings\UserShortcutMap;
use BookStack\Users\UserRepo;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserAccountController extends Controller
{
    public function __construct(
        protected UserRepo $userRepo,
    ) {
        $this->middleware(function (Request $request, Closure $next) {
            $this->preventGuestAccess();
            return $next($request);
        });
    }

    /**
     * Show the overview for user preferences.
     */
    public function index()
    {
        $mfaMethods = user()->mfaValues->groupBy('method');

        return view('users.account.index', [
            'mfaMethods' => $mfaMethods,
        ]);
    }

    /**
     * Show the user-specific interface shortcuts.
     */
    public function showShortcuts()
    {
        $shortcuts = UserShortcutMap::fromUserPreferences();
        $enabled = setting()->getForCurrentUser('ui-shortcuts-enabled', false);

        $this->setPageTitle(trans('preferences.shortcuts_interface'));

        return view('users.account.shortcuts', [
            'category' => 'shortcuts',
            'shortcuts' => $shortcuts,
            'enabled' => $enabled,
        ]);
    }

    /**
     * Update the user-specific interface shortcuts.
     */
    public function updateShortcuts(Request $request)
    {
        $enabled = $request->get('enabled') === 'true';
        $providedShortcuts = $request->get('shortcut', []);
        $shortcuts = new UserShortcutMap($providedShortcuts);

        setting()->putForCurrentUser('ui-shortcuts', $shortcuts->toJson());
        setting()->putForCurrentUser('ui-shortcuts-enabled', $enabled);

        $this->showSuccessNotification(trans('preferences.shortcuts_update_success'));

        return redirect('/my-account/shortcuts');
    }

    /**
     * Show the notification preferences for the current user.
     */
    public function showNotifications(PermissionApplicator $permissions)
    {
        $this->checkPermission('receive-notifications');

        $preferences = (new UserNotificationPreferences(user()));

        $query = user()->watches()->getQuery();
        $query = $permissions->restrictEntityRelationQuery($query, 'watches', 'watchable_id', 'watchable_type');
        $query = $permissions->filterDeletedFromEntityRelationQuery($query, 'watches', 'watchable_id', 'watchable_type');
        $watches = $query->with('watchable')->paginate(20);

        $this->setPageTitle(trans('preferences.notifications'));
        return view('users.account.notifications', [
            'category' => 'notifications',
            'preferences' => $preferences,
            'watches' => $watches,
        ]);
    }

    /**
     * Update the notification preferences for the current user.
     */
    public function updateNotifications(Request $request)
    {
        $this->checkPermission('receive-notifications');
        $data = $this->validate($request, [
           'preferences' => ['required', 'array'],
           'preferences.*' => ['required', 'string'],
        ]);

        $preferences = (new UserNotificationPreferences(user()));
        $preferences->updateFromSettingsArray($data['preferences']);
        $this->showSuccessNotification(trans('preferences.notifications_update_success'));

        return redirect('/my-account/notifications');
    }

    /**
     * Show the view for the "Access & Security" account options.
     */
    public function showAuth(SocialAuthService $socialAuthService)
    {
        $mfaMethods = user()->mfaValues->groupBy('method');

        $this->setPageTitle(trans('preferences.auth'));

        return view('users.account.auth', [
            'category' => 'auth',
            'mfaMethods' => $mfaMethods,
            'authMethod' => config('auth.method'),
            'activeSocialDrivers' => $socialAuthService->getActiveDrivers(),
        ]);
    }

    /**
     * Handle the submission for the auth change password form.
     */
    public function updatePassword(Request $request)
    {
        if (config('auth.method') !== 'standard') {
            $this->showPermissionError();
        }

        $validated = $this->validate($request, [
            'password'         => ['required_with:password_confirm', Password::default()],
            'password-confirm' => ['same:password', 'required_with:password'],
        ]);

        $this->userRepo->update(user(), $validated, false);

        $this->showSuccessNotification(trans('preferences.auth_change_password_success'));

        return redirect('/my-account/auth');
    }
}
