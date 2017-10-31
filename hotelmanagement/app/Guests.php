<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guests extends Model
{
    // $take is to only take the top set number from the DB
    public function scopeHappiestGuests($query , $take = 3) {
        // take the top 3 happiest guests
        return $query->orderBy('happinessLevel','desc')->take($take)->get();

    }
}
