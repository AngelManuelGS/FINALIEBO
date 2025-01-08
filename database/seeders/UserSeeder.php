<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'SISTEMAS FREE',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'CLIENTE',
            'email' => 'cliente@gmail.com',
            'password' => bcrypt('client123'),
            'role' => 'cliente'
        ]);

        //User::factory()->count(10)->create(['role' => 'cliente']);
    }
}
