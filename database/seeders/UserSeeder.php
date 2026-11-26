<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'admin123',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Fauzi',
            'username' => 'fauzi',
            'email' => 'fauzi@example.com',
            'password' => 'fauzi123',
            'role' => 'user',
        ]);
    }
}
