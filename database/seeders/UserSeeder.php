<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Contoh bikin user admin
        User::create([
            'name' => 'Admin',
            'email' => 'indah@gmail.com',
            'password' => Hash::make('indah11'), // jangan lupa hash password
            'role' => 'admin',
        ]);

        // Contoh bikin user biasa
        User::create([
            'name' => 'Adni',
            'email' => 'Adni@gmail.com.com',
            'password' => Hash::make('Adni22'),
            'role' => 'user',
        ]);
    }
}
