<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleUser = Role::create(['name' => 'user']);

        Permission::create(['name'=>'admin.users.index'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=>'admin.users.create'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=>'admin.users.edit'])->syncRoles([$roleAdmin]);

        Permission::create(['name'=>'admin.clientes.index'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name'=>'admin.clientes.show'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name'=>'admin.clientes.create'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name'=>'admin.clientes.edit'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name'=>'admin.clientes.destroy'])->syncRoles([$roleAdmin]);

        #Permission::create(['name'=>'ver:permiso'])->assignRole();

        Permission::create(['name'=>'admin.consumibles.index'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name'=>'admin.consumibles.show'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name'=>'admin.consumibles.create'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=>'admin.consumibles.edit'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name'=>'admin.consumibles.destroy'])->syncRoles([$roleAdmin]);
    }
}
