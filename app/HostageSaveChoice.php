<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostageSaveChoice extends Model
{
    //
    public function hostageSaves()
    {
        return $this->hasMany("App\HostageSave");
    }
}
