<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accountant extends Model
{
    protected $table = 'accountant';
    protected $fillable = [
        'staff_id', 'salary'
    ];
}
