<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'role' => 'admin',
            'password' => Hash::make('admin123')
        ]);

        User::create([
            'name' => 'Admin Dua',
            'role' => 'admin',
            'username' => 'admindua',
            'password' => Hash::make('admindua123')
        ]);
    }
}
