<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class UserManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_access_user_management_index(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $admin = User::factory()->create();
        $admin->assignRole($adminRole);

        $response = $this->actingAs($admin)->get(route('users.index'));

        $response->assertOk();
        $response->assertSee('Gestion de Usuarios');
    }

    public function test_non_admin_cannot_access_user_management_index(): void
    {
        Role::create(['name' => 'admin']);
        $operatorRole = Role::create(['name' => 'operador']);
        $user = User::factory()->create();
        $user->assignRole($operatorRole);

        $response = $this->actingAs($user)->get(route('users.index'));

        $response->assertForbidden();
    }

    public function test_admin_can_update_a_user_role(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $operatorRole = Role::create(['name' => 'operador']);

        $admin = User::factory()->create();
        $admin->assignRole($adminRole);

        $user = User::factory()->create();
        $user->assignRole($operatorRole);

        $response = $this->actingAs($admin)->put(route('users.update', $user), [
            'name' => 'Usuario Editado',
            'email' => 'editado@example.com',
            'role' => 'admin',
            'password' => '',
            'password_confirmation' => '',
        ]);

        $response->assertRedirect(route('users.show', $user));
        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => 'Usuario Editado',
            'email' => 'editado@example.com',
        ]);
        $this->assertTrue($user->fresh()->hasRole('admin'));
    }
}
