<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $fillable = [
        'name', 'description','user_id'
    ];

    /**
     * Get the users for the missions.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
