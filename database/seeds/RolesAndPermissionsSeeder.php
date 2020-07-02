<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('maklad.permission.cache');
        // create user
        User::firstOrCreate([
            'name' => 'admin',
            'password' => Hash::make('123'),
            'email' => 'admin@gmail.com',
            'avatar' => 'default.png',
        ]);
        $user = User::first();
        // create permissions
        Permission::firstOrCreate(['name' => 'edit-article']);
        Permission::firstOrCreate(['name' => 'delete-article']);
        Permission::firstOrCreate(['name' => 'publish-article']);
        Permission::firstOrCreate(['name' => 'unpublish-article']);
        Permission::firstOrCreate(['name' => 'edit-user']);
        Permission::firstOrCreate(['name' => 'delete-user']);

        // create roles and assign existing permissions
        $role = Role::firstOrCreate(['name' => 'writer']);
        $role->givePermissionTo(['edit-article', 'delete-article']);

        $role = Role::firstOrCreate(['name' => 'admin']);
        $role->givePermissionTo(['publish-article', 'unpublish-article', 'edit-article', 'delete-article']);

        $role = Role::firstOrCreate(['name' => 'super-admin']);

        $role->givePermissionTo(['edit-user', 'delete-user', 'publish-article', 'unpublish-article', 'edit-article', 'delete-article']);
        $user->assignRole('super-admin');
    }
}
