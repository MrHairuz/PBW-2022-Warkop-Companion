<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Haris Daffa',
            'email' => 'haris@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Yoan Rifqi Candra',
            'email' => 'yoan@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Khairul Umam Albi',
            'email' => 'khairul@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Abdul Hafidh',
            'email' => 'abdul@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Amar Suhendra',
            'email' => 'amar@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Teuku Nabil Muhammad Dhuha',
            'email' => 'nabil@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Muhammad Rudy Hidayat',
            'email' => 'rudy@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\Models\Pesanan::factory(50)->create();
    }
}
