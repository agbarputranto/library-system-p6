<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Admin
        User::updateOrCreate(
            ['email' => 'akbar@gmail.com'],
            [
                'name' => 'Akbar',
                'password' => 'Akbar789',
                'role' => 'admin',
            ]
        );

        // Akun Petugas
        User::updateOrCreate(
            ['email' => 'petugas@gmail.com'],
            [
                'name' => 'Petugas Perpustakaan',
                'password' => 'Petugas789',
                'role' => 'petugas',
            ]
        );
    }
}