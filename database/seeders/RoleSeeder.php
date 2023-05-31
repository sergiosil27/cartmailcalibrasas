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
        #usuarios
        Permission::create(['name'=>'admin.users.index','description'=>'Listar usuarios'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=>'admin.users.create','description'=>'Crear usuarios'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=>'admin.users.edit','description'=>'Editar usuarios'])->syncRoles([$roleAdmin]);
        #clientes
        Permission::create(['name'=>'admin.clientes.index','description'=>'Listar clientes'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name'=>'admin.clientes.show','description'=>'Mostrar clientes'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name'=>'admin.clientes.create','description'=>'Crear clientes'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name'=>'admin.clientes.edit','description'=>'Editar clientes'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name'=>'admin.clientes.destroy','description'=>'Eliminar clientes'])->syncRoles([$roleAdmin]);
        #consumibles
        Permission::create(['name'=>'admin.consumibles.index','description'=>'Listar platos'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name'=>'admin.consumibles.show','description'=>'Mostrar platos'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name'=>'admin.consumibles.create','description'=>'Crear platos'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=>'admin.consumibles.edit','description'=>'Editar platos'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name'=>'admin.consumibles.destroy','description'=>'Eliminar plato'])->syncRoles([$roleAdmin]);
        #roles
        Permission::create(['name'=>'admin.roles.index','description'=>'Listar roles'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=>'admin.roles.edit','description'=>'Editar rol'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=>'admin.roles.create','description'=>'Crear rol'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=>'admin.roles.destroy','description'=>'Eliminar rol'])->syncRoles([$roleAdmin]);
        #vender
        Permission::create(['name'=>'admin.vender.index','description'=>'Realizar Ventas'])->syncRoles([$roleAdmin]);
        #products-proveedor
        Permission::create(['name'=>'admin.products.index','description'=>'Listar products'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=>'admin.products.edit','description'=>'Editar products'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=>'admin.products.show','description'=>'Mostrar products'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=>'admin.products.create','description'=>'Crear products'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=>'admin.products.destroy','description'=>'Eliminar products'])->syncRoles([$roleAdmin]);
        #proveedores
        
        
    }
}
