<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostageReplacementRejection extends Model
{
    //
    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function hostageReplacement()
    {
        return $this->belongsTo('App\HostageReplacement');
    }
}
