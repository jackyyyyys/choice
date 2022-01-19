<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Group;
use Carbon\Carbon;

class GroupTableSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 6; $i++)
        {
            Group::create(array(
                'name' => 'Group ' . ($i+1),
            ));
        }
    }
}
