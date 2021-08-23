<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskFailure extends Model
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

    public function hostageReplacements()
    {
        return $this->hasMany('App\HostageReplacement');
    }

    public function hostageNoReplacements()
    {
        return $this->hasMany('App\HostageNoReplacement');
    }

    public function newHostages()
    {
        return $this->hasMany('App\NewHostage');
    }
}
