<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<10; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->word();
            $newTrain->departure_station = $faker->sentence(2);
            $newTrain->arrival_station = $faker->sentence(3);
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrival_time = $faker->dateTime();
            $newTrain->train_code = $faker->word();
            $newTrain->carriages_number = $faker->randomDigit();
            $newTrain->in_time = true;
            $newTrain->deleted = false;
            $newTrain->save();
        }
    }
}
