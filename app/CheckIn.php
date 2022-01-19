<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
    //
    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function task()
    {
        return $this->belongsTo('App\Task');
    }
}
