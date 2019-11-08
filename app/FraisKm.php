<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FraisKm extends Model
{
    public function fraisKm()
    {
        return $this->hasbelongsTo('App\Mission');
    }
}
