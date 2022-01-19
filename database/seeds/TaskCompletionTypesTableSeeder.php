<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\TaskCompletionType;
use Carbon\Carbon;

class TaskCompletionTypesTableSeeder extends Seeder
{
    public function run()
    {
        TaskCompletionType::create(array(
            'name' => 'Success',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));

        TaskCompletionType::create(array(
            'name' => 'Fail',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));

        TaskCompletionType::create(array(
            'name' => 'Give Up',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));
    }

}
