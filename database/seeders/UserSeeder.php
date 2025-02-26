<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Seller',
            'email' => 'seller@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'seller',
        ]);

        User::create([
            'name' => 'Customer',
            'email' => 'customer@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'customer',
        ]);
    }
}
