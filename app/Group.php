<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    public function current_task()
    {
        return $this->belongsTo('App\Task');
    }

    public function taskSequences()
    {
        return $this->hasMany('App\TaskSequence');
    }

    public function taskCompletions()
    {
        return $this->hasMany('App\TaskCompletion');
    }

    public function taskSuccess()
    {
        return $this->hasMany('App\TaskSuccess');
    }

    public function taskFailures()
    {
        return $this->hasMany('App\TaskFailure');
    }

    public function taskGiveups()
    {
        return $this->hasMany('App\TaskGiveup');
    }

    public function hostageSaves()
    {
        return $this->hasMany('App\HostageSave');
    }

    public function hostageNoSaves()
    {
        return $this->hasMany('App\HostageNoSave');
    }

    public function hostageSaveAcceptions()
    {
        return $this->hasMany('App\HostageSaveAcception');
    }

    public function hostageSaveRejections()
    {
        return $this->hasMany('App\HostageSaveRejection');
    }

    public function hostageReplacements()
    {
        return $this->hasMany('App\HostageReplacement');
    }

    public function hostageNoReplacements()
    {
        return $this->hasMany('App\HostageNoSave');
    }

    public function hostageReplacementAcceptions()
    {
        return $this->hasMany('App\HostageReplacementAcception');
    }

    public function hostageReplacementRejections()
    {
        return $this->hasMany('App\HostageReplacementRejection');
    }

    public function newHostages()
    {
        return $this->hasMany('App\NewHostage');
    }
}
