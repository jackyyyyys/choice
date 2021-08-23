<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostageSaveAcception extends Model
{
    //
    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function hostageSave()
    {
        return $this->belongsTo('App\HostageSave');
    }
}
