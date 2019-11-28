<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FraisKm extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'depart', 'arrivee', 'trajets', 'title', 'description', 'image', 'start', 'arrival', 'mission_id', 'ttc', 'created_at'
    ];

    public function fraisKm()
    {
        return $this->hasbelongsTo('App\Mission');
    }
}
