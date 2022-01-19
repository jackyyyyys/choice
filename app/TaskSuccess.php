<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskSuccess extends Model
{
    //
    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function taskCompletion()
    {
        return $this->belongsTo('App\TaskCompletion');
    }

    public function hostageSaves()
    {
        return $this->hasMany('App\HostageSave');
    }

    public function hostageNoSaves()
    {
        return $this->hasMany('App\HostageNoSave');
    }
}
