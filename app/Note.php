<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $dates = [
        'start'
    ];

    protected $fillable = [
        'title', 'pays', 'ttc', 'tva', 'description', 'image', 'mission_id', 'start'
    ];

    public function mission()
    {
        return $this->belongsTo('App\Mission');
    }
}
