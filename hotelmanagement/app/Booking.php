<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Booking extends Authenticatable
{
    use Notifiable;

    protected $guard = 'web';
    protected $table = 'booking';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first','last', 'email', 'checkin', 'checkout','payment'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'payment',
    ];
}