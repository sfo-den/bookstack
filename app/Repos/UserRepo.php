<?php namespace BookStack\Repos;


use BookStack\Page;
use BookStack\Role;
use BookStack\Services\EntityService;
use BookStack\User;
use Setting;

class UserRepo
{

    protected $user;
    protected $role;
    protected $entityService;

    /**
     * UserRepo constructor.
     * @param User $user
     * @param Role $role
     * @param EntityService $entityService
     */
    public function __construct(User $user, Role $role, EntityService $entityService)
    {
        $this->user = $user;
        $this->role = $role;
        $this->entityService = $entityService;
    }

    /**
     * @param string $email
     * @return User|null
     */
    public function getByEmail($email)
    {
        return $this->user->where('email', '=', $email)->first();
    }

    /**
     * @param int $id
     * @return User
     */
    public function getById($id)
    {
        return $this->user->findOrFail($id);
    }

    /**
     * Creates a new user and attaches a role to them.
     * @param array $data
     * @return User
     */
    public function registerNew(array $data)
    {
        $user = $this->create($data);
        $this->attachDefaultRole($user);

        // Get avatar from gravatar and save
        if (!config('services.disable_services')) {
            $avatar = \Images::saveUserGravatar($user);
            $user->avatar()->associate($avatar);
            $user->save();
        }

        return $user;
    }

    /**
     * Give a user the default role. Used when creating a new user.
     * @param $user
     */
    public function attachDefaultRole($user)
    {
        $roleId = Setting::get('registration-role');
        if ($roleId === false) $roleId = $this->role->getDefault()->id;
        $user->attachRoleId($roleId);
    }

    /**
     * Checks if the give user is the only admin.
     * @param User $user
     * @return bool
     */
    public function isOnlyAdmin(User $user)
    {
        if ($user->role->name != 'admin') {
            return false;
        }

        $adminRole = $this->role->where('name', '=', 'admin')->first();
        if (count($adminRole->users) > 1) {
            return false;
        }

        return true;
    }

    /**
     * Create a new basic instance of user.
     * @param array $data
     * @return User
     */
    public function create(array $data)
    {
        return $this->user->forceCreate([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
    }

    /**
     * Remove the given user from storage, Delete all related content.
     * @param User $user
     */
    public function destroy(User $user)
    {
        $user->socialAccounts()->delete();
        $user->delete();
    }

    /**
     * Get the latest activity for a user.
     * @param User $user
     * @param int $count
     * @param int $page
     * @return array
     */
    public function getActivity(User $user, $count = 20, $page = 0)
    {
        return \Activity::userActivity($user, $count, $page);
    }

    /**
     * Get the pages the the given user has created.
     * @param User $user
     * @param int $count
     * @param int $page
     * @return mixed
     */
    public function getCreatedPages(User $user, $count = 20, $page = 0)
    {
        return $this->entityService->page->where('created_by', '=', $user->id)->orderBy('created_at', 'desc')
            ->skip($page * $count)->take($count)->get();
    }

    /**
     * Get asset created counts for the give user.
     * @return array
     */
    public function getAssetCounts(User $user)
    {
        return [
            'pages' => $this->entityService->page->where('created_by', '=', $user->id)->count(),
            'chapters' => $this->entityService->chapter->where('created_by', '=', $user->id)->count(),
            'books' => $this->entityService->book->where('created_by', '=', $user->id)->count(),
        ];
    }
}