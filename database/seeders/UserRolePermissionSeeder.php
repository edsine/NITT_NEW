<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create or update Permissions
        $permissions = [
            'view role', 'create role', 'update role', 'delete role',
            'view permission', 'create permission', 'update permission', 'delete permission',
            'view user', 'create user', 'update user', 'delete user',
            'view product', 'create product', 'update product', 'delete product'
        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission], ['name' => $permission]);
        }

        // Create Roles
        $superAdminRole = Role::firstOrCreate(['name' => 'super-admin']);
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $staffRole = Role::firstOrCreate(['name' => 'staff']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Give all permissions to super-admin role
        $superAdminRole->syncPermissions(Permission::all());

        // Give specific permissions to admin role
        $adminPermissions = [
            'create role', 'view role', 'update role',
            'create permission', 'view permission',
            'create user', 'view user', 'update user',
            'create product', 'view product', 'update product'
        ];
        $adminRole->syncPermissions($adminPermissions);

        // Create Users and assign roles
        $superAdminUser = User::firstOrCreate(
            ['email' => 'superadmin@gmail.com'],
            ['name' => 'Super Admin', 'password' => Hash::make('12345678')]
        );
        $superAdminUser->assignRole($superAdminRole);

        $adminUser = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            ['name' => 'Admin', 'password' => Hash::make('12345678')]
        );
        $adminUser->assignRole($adminRole);

        $staffUser = User::firstOrCreate(
            ['email' => 'staff@gmail.com'],
            ['name' => 'Staff', 'password' => Hash::make('12345678')]
        );
        $staffUser->assignRole($staffRole);
    }
}
