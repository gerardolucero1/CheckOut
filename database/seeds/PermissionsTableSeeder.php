<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //Create permissions

        /* Hotels */
        Permission::create(['name' => 'hotels.index']);
        Permission::create(['name' => 'hotels.create']);
        Permission::create(['name' => 'hotels.edit']);
        Permission::create(['name' => 'hotels.show']);
        Permission::create(['name' => 'hotels.delete']);

        /* Users */
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.show']);
        Permission::create(['name' => 'users.delete']);

        // Create roles and assign created permissions

        /* Webmaster */
        $role = Role::create(['name' => 'webmaster']);
        $role->givePermissionTo(Permission::all());

        $webmaster = User::create([
            'name' => 'Gerardo Lucero',
            'email' => 'webmaster@gmail.com',
            'password' => bcrypt('Margarit@1'),
        ]);

        $webmaster->assignRole($role);

        /* GM */
        $role = Role::create(['name' => 'general-manager']);
        $role->givePermissionTo(['hotels.show', 'hotels.edit']);

        $general_manager = User::create([
            'name' => 'Sam Jhon',
            'email' => 'general_manager@gmail.com',
            'password' => bcrypt('Margarit@1'),
        ]);

        $general_manager->assignRole($role);
    }
}
