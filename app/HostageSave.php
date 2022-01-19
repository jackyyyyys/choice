<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostageSave extends Model
{
    //
    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function taskSuccess()
    {
        return $this->belongsTo('App\TaskSuccess');
    }
}
