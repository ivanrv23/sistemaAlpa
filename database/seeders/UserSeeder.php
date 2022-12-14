<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(15)->create();
        // company ALPA
        User::create([
            'name' => 'Alcides Yunier Turruellas Osorio',
            'companies_id' => 1,
            'email' => 'ayunierto@gmail.com',
            'password' => bcrypt('maskmask'),
        ])->assignRole('Master');
        
        User::create([
            'name' => 'Ronal',
            'companies_id' => 1,
            'email' => 'ronal@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('Master');

        User::create([
            'name' => 'Admin',
            'companies_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Seller',
            'companies_id' => 1,
            'email' => 'seller@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('Seller');
    }
}
