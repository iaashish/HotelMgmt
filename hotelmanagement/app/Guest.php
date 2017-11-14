<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    // $take is to only take the top set number from the DB
    public function scopeHappiestGuest($query , $take = 3) {
        // take the top 3 happiest guests
        return $query->orderBy('happinessLevel','desc')->take($take)->get();

    }
}
