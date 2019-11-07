<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function missions()
    {
        return $this->belongsToMany('App\Mission');
    }
}
