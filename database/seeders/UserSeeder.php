<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();

        User::create([
            'name' => 'Danuverry',
            'email' => 'danuverry42562@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'password' => Hash::make('password'),
            'phone' => '081229110158',
            'bio' => 'laravel 10'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'password' => Hash::make('password'),
            'phone' => '085123456789',
            'bio' => 'laravel 8',
        ]);
    }
}
