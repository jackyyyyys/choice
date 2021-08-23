<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskCompletionChoice extends Model
{
    //
    public function taskCompletions()
    {
        return $this->hasMany('App\TaskCompletion');
    }
}
