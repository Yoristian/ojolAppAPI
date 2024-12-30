<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PasswordResetsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('password_resets')->insert([
            'email' => 'user@example.com', // Example email for password reset
            'token' => Str::random(60),    // Random 60-character token
            'created_at' => Carbon::now(), // Current timestamp
        ]);
    }
}
