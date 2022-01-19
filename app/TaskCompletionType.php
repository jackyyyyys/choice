<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskCompletionType extends Model
{
    //
    public function taskCompletions()
    {
        return $this->hasMany('App\TaskCompletion');
    }
}
