<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskSequence extends Model
{
    //
    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
