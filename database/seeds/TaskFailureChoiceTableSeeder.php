<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\TaskFailureChoice;
use Carbon\Carbon;

class TaskFailureChoiceTableSeeder extends Seeder
{
    public function run()
    {
        TaskFailureChoice::create(array(
            'name' => 'Replace Hostage',
            'description' => 'Replace your groupmate at the punishment zone with another groupmatee',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));

        TaskFailureChoice::create(array(
            'name' => 'NO Replace Hostage',
            'description' => 'Leave your groupmate at the punichment zone',
            'point_award' => '-10',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));

        TaskFailureChoice::create(array(
            'name' => 'New Hostage',
            'description' => 'Choose a groupmate for the punishment zone',
            'point_award' => '-20',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));
    }

}
