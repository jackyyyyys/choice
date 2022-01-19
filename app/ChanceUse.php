<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChanceUse extends Model
{
    //
    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function task_failure()
    {
        return $this->belongsTo('App\TaskFailure');
    }
}
