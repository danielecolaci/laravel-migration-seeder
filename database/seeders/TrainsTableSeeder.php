<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10; $i++) { 
            $train = new Train();
            $train->company = $faker->randomElement(['Italo', 'Trenitalia', 'Trenord', 'Frecciargento']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time('H:i:s');
            $train->arrival_time = $faker->time('H:i:s');
            $train->train_code = $faker->bothify('??##');
            $train->num_carriages = $faker->numberBetween(1, 20);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->save(); 
        }


        /* $trains = config('db.trains');

        foreach($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->num_carriages = $train['num_carriages'];
            $newTrain->on_time = $train['on_time'];
            $newTrain->cancelled = $train['cancelled'];
            $newTrain->save(); 
        } */
    }
    
}
