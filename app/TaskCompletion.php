<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskCompletion extends Model
{
    //
    public function group()
    {
        return $this->belongsTo("App\Group");
    }

    public function task()
    {
        return $this->belongsTo("App\Task");
    }

    public function taskCompletionType()
    {
        return $this->belongsTo('App\TaskCompletionType');
    }

    public function taskSuccess()
    {
        return $this->hasMany("App\TaskSuccess");
    }

    public function taskFailures()
    {
        return $this->hasMany("App\TaskFailure");
    }

    public function taskGiveups()
    {
        return $this->hasMany("App\TaskGiveup");
    }
}
