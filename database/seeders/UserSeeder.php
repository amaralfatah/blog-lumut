<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'name' => 'Admin User',
                'role' => 'admin',
            ],
            [
                'username' => 'author',
                'password' => Hash::make('author'),
                'name' => 'Author User',
                'role' => 'author',
            ],
        ]);
    }
}
