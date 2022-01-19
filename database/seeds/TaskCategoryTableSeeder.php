<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\TaskCategory;
use Carbon\Carbon;

class TaskCategoryTableSeeder extends Seeder
{
    public function run()
    {
        TaskCategory::create(array(
            'name' => 'easy',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));

        TaskCategory::create(array(
            'name' => 'medium',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));

        TaskCategory::create(array(
            'name' => 'difficult',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));

        TaskCategory::create(array(
            'name' => 'battle',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));
    }

}
