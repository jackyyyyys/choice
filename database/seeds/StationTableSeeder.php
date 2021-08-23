<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Station;
use Carbon\Carbon;

class StationTableSeeder extends Seeder
{
    public function run()
    {
        $stations =
        [
            'carpark',
            'multi',
            '4F',
            '5F',
            '6F',
            '7F',
            '8F',
            '9F',
            '12F',
            '13F',
            '14F',
            '15F',
            '16F'
        ];
        for ($i = 0; $i < sizeof($stations); $i++) {
            Station::create(array(
                'location' => $stations[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ));
        }
    }

}

