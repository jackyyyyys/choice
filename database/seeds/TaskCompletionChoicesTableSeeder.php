<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\TaskCompletionChoice;
use Carbon\Carbon;

class TaskCompletionChoicesTableSeeder extends Seeder
{
    public function run()
    {
        TaskCompletionChoice::create(array(
            'name' => 'SUCCESS',
            'description' => ' ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));

        TaskCompletionChoice::create(array(
            'name' => 'FAIL',
            'description' => ' ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));

        TaskCompletionChoice::create(array(
            'name' => 'GIVE UP',
            'description' => '',
            'point_award' => '-5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));
    }
}
