<?php

namespace Database\Seeders;

use App\Models\Factura;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     *  @return void
     */
    public function run()
    {
        #\App\Models\Cliente::factory(100)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);




    }
}
