<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskSuccessChoice extends Model
{
    //
    public function taskSuccess()
    {
        return $this->hasMany('App\TaskSuccess');
    }
}
