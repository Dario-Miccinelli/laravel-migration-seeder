<?php

use App\Models\Train;
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
                'train_name' => 'BoolCiuff',
                'train_cost' => 32.84,
                'train_come_from' => 'Rome',
                'train_going_to' => 'Milan',
                'train_available_seat' => 48,

            ],

            [
                'train_name' => 'Trenord',
                'train_cost' => 39.99,
                'train_come_from' =>'Naples',
                'train_going_to' => 'Rome',
                'train_available_seat' =>  49,
            ],

            [
                'train_name' => 'Trenitalia',
                'train_cost' => 41,
                'train_come_from' =>'Bologna',
                'train_going_to' => 'Rome',
                'train_available_seat' =>  20,
            ],

            [
                'train_name' => 'Ciuff',
                'train_cost' => 80,
                'train_come_from' =>'Rome',
                'train_going_to' => 'Genova',
                'train_available_seat' =>  19,
            ],

            [
                'train_name' => 'Trenord',
                'train_cost' => 5,
                'train_come_from' =>'Forlì',
                'train_going_to' => 'Rimini',
                'train_available_seat' =>  9,
            ]

        ];

        foreach($trains as $elem) {
            // istanza
            $newTrain = new Train();


            // valori
            $newTrain->train_name = $elem['train_name'];
            $newTrain->train_cost = $elem['train_cost'];
            $newTrain->train_come_from = $elem['train_come_from'];
            $newTrain->train_going_to = $elem['train_going_to'];
            $newTrain->train_available_seat= $elem['train_available_seat'];


            // save
            $newTrain->save();
        }
    }
}
