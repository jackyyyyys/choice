<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\HostageReplacementChoice;
use Carbon\Carbon;

class HostageReplacementChoiceTableSeeder extends Seeder
{
    public function run()
    {
        HostageReplacementChoice::create(array(
            'name' => 'Accept',
            'description' => 'You can go back to your group and another groupmate will replace you',
            'point_award' => '-20',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));

        HostageReplacementChoice::create(array(
            'name' => 'Reject',
            'description' => 'You will continue to stay in the punishment zone. One chance to reject by each groupmate',
            'point_award' => '-300',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));
    }

}
