<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CostumerOrderSeeder::class);
        $this->call(CostumerMelakukanRatingTableSeeder::class);
        $this->call(DriverSeeder::class);
        $this->call(DriverMenerimaOrderTableSeeder::class);
        $this->call(DriverPickupTableSeeder::class);
        $this->call(DriverSampaiTujuanTableSeeder::class);
        $this->call(HistoryOrderTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(RegisterTableSeeder::class);
        $this->call(LoginTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(UsersTableSeeder::class);


    }
}
