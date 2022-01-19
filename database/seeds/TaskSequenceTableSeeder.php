<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\TaskSequence;
use Carbon\Carbon;

class TaskSequenceTableSeeder extends Seeder
{
    public function run()
    {
        $task_sequences = array_map('str_getcsv', file( public_path() . "/csv/task_sequences.csv" ));
        for ($i = 0; $i < sizeof($task_sequences); $i++) {
            TaskSequence::create(array(
                'group_id' => $i+1,
                'task_1_id' => $task_sequences[$i][0],
                'task_2_id' => $task_sequences[$i][1],
                'task_3_id' => $task_sequences[$i][2],
                'task_4_id' => $task_sequences[$i][3],
                'task_5_id' => $task_sequences[$i][4],
                'task_6_id' => $task_sequences[$i][5],
                'task_7_id' => $task_sequences[$i][6],
                'task_8_id' => $task_sequences[$i][7],
                'task_9_id' => $task_sequences[$i][8],
                'task_10_id' => $task_sequences[$i][9],
                'task_11_id' => $task_sequences[$i][10],
                'task_12_id' => $task_sequences[$i][11],
                'task_13_id' => $task_sequences[$i][12],
                'task_14_id' => $task_sequences[$i][13],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ));
        }
    }

}

