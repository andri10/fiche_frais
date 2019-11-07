<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function mission()
    {
        return $this->hasbelongsTo('App\Mission');
    }
}
