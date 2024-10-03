<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Create permissions
        $permissions = [
            'user-create',
            'user-edit',
            'user-delete',
            'user-list',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Assign permissions to roles
        $adminRole->givePermissionTo($permissions);
        $userRole->givePermissionTo('user-list'); // Regular users can only view

        // Create admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'), // Change this to a secure password
            'phone' => '1234567890',
            'balance' => 100.00,
            'photo' => null,
            'status' => 1,
        ]);

        $admin->assignRole($adminRole);

        // Create regular user
        $regularUser = User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'), // Change this to a secure password
            'phone' => '0987654321',
            'balance' => 50.00,
            'photo' => null,
            'status' => 1,
        ]);

        $regularUser->assignRole($userRole);
    }
}