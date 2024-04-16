<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\country;
use Faker\Factory as Faker;



class countryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            $faker = Faker::create();
            $country = new country;
            $country->name = $faker->name;
            $country->save();
        }
    }
}
