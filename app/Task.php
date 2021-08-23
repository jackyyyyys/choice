<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public function station()
    {
        return $this->belongsTo("App\Station");
    }

    public function checkIns()
    {
        return $this->hasMany('App\CheckIn');
    }

    public function taskCategory()
    {
        return $this->belongsTo(("App\TaskCategory"));
    }

    public function taskSequence()
    {
        return $this->belongsTo('App\TaskSequence');
    }

    public function taskCompletions()
    {
        return $this->hasMany('App\TaskCompletions');
    }
}
