<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskGiveup extends Model
{
    //
    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function taskCompletion()
    {
        return $this->belongsTo('App\TaskCompletion');
    }
}
