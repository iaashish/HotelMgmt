<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    //
     public function staff()
     {
         return $this->morphMany('App\Staff', 'type');
     }
}
