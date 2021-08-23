<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Task;
use Carbon\Carbon;

class TaskTableSeeder extends Seeder
{
    public function run()
    {
        $tasks = array_map('str_getcsv', file( public_path() . "/csv/tasks.csv" ));
        for($i = 0; $i < sizeof($tasks); $i++) {
            Task::create(array(
                'name' => $tasks[$i][0],
                'station_id' => DB::table('stations')->select('id')->where('location', $tasks[$i][1])->first()->id,
                'task_category_id' => DB::table('task_categories')->select('id')->where('name', $tasks[$i][2])->first()->id,
                'time_limit' => 6,
                'description' => '',
                'second_chance' => $tasks[$i][3],
                'easy_or_hard' => $tasks[$i][4],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ));
        }
    }

}
