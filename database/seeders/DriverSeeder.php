<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Driver;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create drivers table if not exists
        if (!Schema::hasTable('drivers')) {
            Schema::create('drivers', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->string('phone');
                $table->text('address');
                $table->enum('vehicle', ['motor', 'mobil']);
                $table->string('license');
                $table->string('ktp')->unique();
                $table->string('photo');
                $table->timestamps();
            });
        }

        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Driver::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'vehicle' => $faker->randomElement(['motor', 'mobil']),
                'license' => $faker->numerify('##########'),
                'ktp' => $faker->unique()->numerify('################'),
                'photo' => $faker->imageUrl(200, 200, 'people'),
            ]);
        }
    }
}
