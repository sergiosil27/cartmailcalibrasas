<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        'name' => 'Sergio Silgado',
        'email' => 'sergio.sil.27@hotmail.com',
        'password' => bcrypt('123456789')
       ])->syncRoles(['admin']);
       User::factory(8)->create();

    }
}
