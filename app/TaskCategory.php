<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskCategory extends Model
{
    //
    public function Tasks()
    {
        return $this->hasMany("App\Task");
    }
}
