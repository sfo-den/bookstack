<?php

namespace Tests\Api;

use BookStack\Auth\Role;
use BookStack\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UsersApiTest extends TestCase
{
    use TestsApi;

    protected $baseEndpoint = '/api/users';

    public function test_users_manage_permission_needed_for_all_endpoints()
    {
        // TODO
    }

    public function test_no_endpoints_accessible_in_demo_mode()
    {
        // TODO
        // $this->preventAccessInDemoMode();
        // Can't use directly in constructor as blocks access to docs
        // Maybe via route middleware
    }

    public function test_index_endpoint_returns_expected_shelf()
    {
        $this->actingAsApiAdmin();
        /** @var User $firstUser */
        $firstUser = User::query()->orderBy('id', 'asc')->first();

        $resp = $this->getJson($this->baseEndpoint . '?count=1&sort=+id');
        $resp->assertJson(['data' => [
            [
                'id'   => $firstUser->id,
                'name' => $firstUser->name,
                'slug' => $firstUser->slug,
                'email' => $firstUser->email,
                'profile_url' => $firstUser->getProfileUrl(),
                'edit_url' => $firstUser->getEditUrl(),
                'avatar_url' => $firstUser->getAvatar(),
            ],
        ]]);
    }

    public function test_read_endpoint()
    {
        $this->actingAsApiAdmin();
        /** @var User $user */
        $user = User::query()->first();
        /** @var Role $userRole */
        $userRole = $user->roles()->first();

        $resp = $this->getJson($this->baseEndpoint . "/{$user->id}");

        $resp->assertStatus(200);
        $resp->assertJson([
            'id'         => $user->id,
            'slug'       => $user->slug,
            'email'      => $user->email,
            'external_auth_id' => $user->external_auth_id,
            'roles' => [
                [
                    'id' => $userRole->id,
                    'display_name' => $userRole->display_name,
                ]
            ],
        ]);
    }

    public function test_update_endpoint()
    {
        $this->actingAsApiAdmin();
        /** @var User $user */
        $user = $this->getAdmin();
        $roles = Role::query()->pluck('id');
        $resp = $this->putJson($this->baseEndpoint . "/{$user->id}", [
            'name' => 'My updated user',
            'email' => 'barrytest@example.com',
            'roles' => $roles,
            'external_auth_id' => 'btest',
            'password' => 'barrytester',
            'language' => 'fr',
        ]);

        $resp->assertStatus(200);
        $resp->assertJson([
            'id' => $user->id,
            'name' => 'My updated user',
            'email' => 'barrytest@example.com',
            'external_auth_id' => 'btest',
        ]);
        $user->refresh();
        $this->assertEquals('fr', setting()->getUser($user, 'language'));
        $this->assertEquals(count($roles), $user->roles()->count());
        $this->assertNotEquals('barrytester', $user->password);
        $this->assertTrue(Hash::check('barrytester', $user->password));
    }

    public function test_update_endpoint_does_not_remove_info_if_not_provided()
    {
        $this->actingAsApiAdmin();
        /** @var User $user */
        $user = $this->getAdmin();
        $roleCount = $user->roles()->count();
        $resp = $this->putJson($this->baseEndpoint . "/{$user->id}", []);

        $resp->assertStatus(200);
        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
        ]);
        $this->assertEquals($roleCount, $user->roles()->count());
    }

    public function test_delete_endpoint()
    {
        $this->actingAsApiAdmin();
        /** @var User $user */
        $user = User::query()->where('id', '!=', $this->getAdmin()->id)
            ->whereNull('system_name')
            ->first();

        $resp = $this->deleteJson($this->baseEndpoint . "/{$user->id}");

        $resp->assertStatus(204);
        $this->assertActivityExists('user_delete', null, $user->logDescriptor());
    }

    public function test_delete_endpoint_fails_deleting_only_admin()
    {
        $this->actingAsApiAdmin();
        $adminRole = Role::getSystemRole('admin');
        $adminToDelete = $adminRole->users()->first();
        $adminRole->users()->where('id', '!=', $adminToDelete->id)->delete();

        $resp = $this->deleteJson($this->baseEndpoint . "/{$adminToDelete->id}");

        $resp->assertStatus(500);
        $resp->assertJson($this->errorResponse('You cannot delete the only admin', 500));
    }

    public function test_delete_endpoint_fails_deleting_public_user()
    {
        $this->actingAsApiAdmin();
        /** @var User $publicUser */
        $publicUser = User::query()->where('system_name', '=', 'public')->first();

        $resp = $this->deleteJson($this->baseEndpoint . "/{$publicUser->id}");

        $resp->assertStatus(500);
        $resp->assertJson($this->errorResponse('You cannot delete the guest user', 500));
    }
}
