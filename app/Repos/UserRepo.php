<?php namespace BookStack\Repos;


use BookStack\Role;
use BookStack\User;

class UserRepo
{

    protected $user;
    protected $role;

    /**
     * UserRepo constructor.
     * @param $user
     */
    public function __construct(User $user, Role $role)
    {
        $this->user = $user;
        $this->role = $role;
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
        $roleId = \Setting::get('registration-role');

        if ($roleId === false) {
            $roleId = $this->role->getDefault()->id;
        }

        $user->attachRoleId($roleId);
        return $user;
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
        return $this->user->create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
    }
}