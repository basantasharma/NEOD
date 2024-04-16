<?php

namespace Database\Seeders;

use Dotenv\Store\File\Reader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\read;
use Faker\Factory as Faker;

class readseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {

            $faker = faker::create();
            $read = new Read;
            $read->r_link = $faker->url;
            $read->save();

        }
    }
}
