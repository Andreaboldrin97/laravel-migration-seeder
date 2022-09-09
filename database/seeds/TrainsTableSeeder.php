<?php

use App\Train;
use Illuminate\Database\Seeder;



class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company' => 'Treni italia',
                'departure_station' => 'Stazione Termini (RM)',
                'arrival_station' => 'Milano Centrale (MI)',
                'train_code' => '9933t54',
                'number_of_carriages' => 90,
                'is_on_time' => 1,
                'is_delete' => 0
            ],
            [
                'company' => 'Treni italia',
                'departure_station' => 'Stazione Termini (RM)',
                'arrival_station' => 'Stazione Santa Maria Novella (FI)',
                'train_code' => '8933t54',
                'number_of_carriages' => 100,
                'is_on_time' => 0,
                'is_delete' => 0
            ],
            [
                'company' => 'Treni italia',
                'departure_station' => 'Stazione Santa Maria Novella (FI)',
                'arrival_station' => 'Milano Centrale (MI)',
                'train_code' => '7933t54',
                'number_of_carriages' => 60,
                'is_on_time' => 1,
                'is_delete' => 0
            ],
            [
                'company' => 'Treni italia',
                'departure_station' => 'Milano Centrale (MI)',
                'arrival_station' => 'Stazione Termini (RM)',
                'train_code' => '6933t54',
                'number_of_carriages' => 90,
                'is_on_time' => 0,
                'is_delete' => 1
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->number_of_carriages = $train['number_of_carriages'];
            $newTrain->is_on_time = $train['is_on_time'];
            $newTrain->is_delete = $train['is_delete'];
            $newTrain->save();
        }
    }
}
