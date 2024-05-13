<?php

namespace Database\Seeders;
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Torino Porta Nuova',
                'arrival_station' => 'Lecce',
                'departure_time' => '10:05:00',
                'arrival_time' => '21:30:00',
                'train_code' => 'FR 1001',
                'num_carriages' => 9,
                'on_time' => 1,
                'cancelled' => 0,
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Bologna Centrale',
                'arrival_station' => 'Bari Centrale',
                'departure_time' => '07:55:00',
                'arrival_time' => '16:40:00',
                'train_code' => 'IC 909',
                'num_carriages' => 7,
                'on_time' => 1,
                'cancelled' => 0,
            ]
        ];

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
        }
    }
    
}
