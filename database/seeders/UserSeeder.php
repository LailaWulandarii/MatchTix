<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'matchtixowner',
                'email' => 'matchtixowner@gmail.com',
                'username' => 'matchtixowner',
                'password' => Hash::make('matchtixowner123'),
                'role' => 'event_owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'admin1',
                'email' => 'admin1@gmail.com',
                'username' => 'admin1',
                'password' => Hash::make('admin111'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aurelia andini',
                'email' => 'aurelia@gmail.com',
                'username' => 'aurelia',
                'password' => Hash::make('aurelia123'),
                'role' => 'participant',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adnan Ariano',
                'email' => 'adnan@gmail.com',
                'username' => 'adnan',
                'password' => Hash::make('adnan123'),
                'role' => 'participant',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
