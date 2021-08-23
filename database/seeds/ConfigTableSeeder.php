<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Config;
use Carbon\Carbon;

class ConfigTableSeeder extends Seeder
{
    public function run()
    {
        Config::create(array(
            'signature' => 'jackysin',
            'master_counter' => DB::table('configs')->select('master_counter')->first()+1,
            'pa_message' => 'Test Message'
        ));
    }

}
