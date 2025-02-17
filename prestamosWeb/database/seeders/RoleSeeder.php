<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(["name"=> "admin"]);
        $role2 = Role::create(["name"=> "usuario"]);

        Permission::create(["name"=> "admin.index"])->syncRoles([ $role1]);
        // Permission::create(["name"=> "colores.create"])->syncRoles([ $role1, $role2 ]);
        // Permission::create(["name"=> "colores.show"])->syncRoles([ $role1, $role2 ]);
        // Permission::create(["name"=> "colores.edit"])->syncRoles([ $role1, $role2 ]);

    }
}
