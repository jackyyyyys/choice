<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostageNoSave extends Model
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
