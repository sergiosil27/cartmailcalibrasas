<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
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
        $roleInvitado = Role::create(['name' => 'invitado']);

        Permission::create(['name'=>'ver:role']);
        Permission::create(['name'=>'crear:role']);
        Permission::create(['name'=>'editar:role']);
        Permission::create(['name'=>'eliminar:role']);

        Permission::create(['name'=>'ver:permiso']);

        Permission::create(['name'=>'ver:usuario']);
        Permission::create(['name'=>'crear:usuario']);
        Permission::create(['name'=>'editar:usuario']);
        Permission::create(['name'=>'eliminar:usuario']);
        $user = new User;
        $user->name='admin';
        $user->email='admin@mail.com';
        $user->password=bcrypt('123456789');
        $user->save();
        $user->assignRole($roleAdmin);
        $user = new User;
        $user->name='invitado';
        $user->email='invitado@mail.com';
        $user->password=bcrypt('123456789');
        $user->save();
        $user->assignRole($roleInvitado);
    }
}
