<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\TaskSuccessChoice;
use Carbon\Carbon;

class TaskSuccessChoiceTableSeeder extends Seeder
{
    public function run()
    {
        TaskSuccessChoice::create(array(
            'name' => 'Save Hostage',
            'description' => 'Bring one of your groupmates back from the punishment zone',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));

        TaskSuccessChoice::create(array(
            'name' => 'NO Save Hostage',
            'description' => 'Leave your groupmate at the punichment zone',
            'point_award' => '+30',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));
    }

}
