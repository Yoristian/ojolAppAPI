<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => Hash::make('user123'), // Password dienkripsi
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'), // Password dienkripsi
            'remember_token' => Str::random(10),
        ]);
    }

}

