<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'title', 'pays', 'ttc', 'tva', 'description', 'image', 'mission_id'
    ];

    public function mission()
    {
        return $this->belongsTo('App\Mission');
    }
}
