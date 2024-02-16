<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for($i=0; $i<15; $i++){
            $new_train = new Train();
            $new_train->factory = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->date();
            $new_train->arrival_time = $faker->date();
            $new_train->train_code = $faker->isbn10();
            $new_train->n_train_cars = $faker->numberBetween(1, 20);
            $new_train->delay = $faker->boolean();
            $new_train->deleted = $faker->boolean();
            $new_train->save();
        }
    }
}
