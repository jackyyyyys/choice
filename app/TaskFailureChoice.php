<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskFailureChoice extends Model
{
    //
    public function taskFailures()
    {
        return $this->hasMany('App\TaskFailure');
    }
}
