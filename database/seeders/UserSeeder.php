<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create Super Admin
        User::updateOrCreate(
            ['email' => 'admin@sbytickets.com'],
            [
                'full_name' => 'Super Administrator',
                'password' => Hash::make('password123'),
                'is_admin' => true,
                'phone' => '081234567890',
            ]
        );

        // Create Dummy Customer
        User::updateOrCreate(
            ['email' => 'customer@gmail.com'],
            [
                'full_name' => 'John Doe',
                'password' => Hash::make('password123'),
                'is_admin' => false,
                'phone' => '08987654321',
            ]
        );
    }
}
