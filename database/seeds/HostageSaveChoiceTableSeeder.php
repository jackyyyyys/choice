<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\HostageSaveChoice;
use Carbon\Carbon;

class HostageSaveChoiceTableSeeder extends Seeder
{
    public function run()
    {
        HostageSaveChoice::create(array(
            'name' => 'Accept',
            'description' => 'You can go back to your group',
            'point_award' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));

        HostageSaveChoice::create(array(
            'name' => 'Reject',
            'description' => 'You will continue to stay in the punishment zone. One chance to reject by each gruopmate',
            'point_award' => '+20',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ));
    }

}
