<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {

            $departureDateTime = $faker->dateTimeBetween('now', '+1 day');
            $departureDate = $departureDateTime->format('Y-m-d');
            $departureTime = $departureDateTime->format('H:i:s');

            $arrivalDateTime = $faker->dateTimeBetween($departureDateTime, '+3 month');
            $arrivalDate = $arrivalDateTime->format('Y-m-d');
            $arrivalTime = $arrivalDateTime->format('H:i:s');

            DB::table('trains')->insert([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_date' => $departureDate,
                'departure_time' => $departureTime,
                'arrival_date' => $arrivalDate,
                'arrival_time' => $arrivalTime,
                'train_code' => $faker->randomNumber(5),
                'carriages_number' => $faker->numberBetween(1, 10),
                'on_time' => $faker->boolean,
                'canceled' => $faker->boolean,
            ]);
        }
    }
}