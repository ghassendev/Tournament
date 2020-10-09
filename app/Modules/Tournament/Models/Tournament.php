<?php

namespace App\Modules\Tournament\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    public function showOrganizerOfTournament()
    {
        return $this->belongsTo('App\User');
    }
}
