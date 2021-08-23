<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewHostage extends Model
{

    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function taskFailure()
    {
        return $this->belongsTo("App\TaskFailure");
    }

}
