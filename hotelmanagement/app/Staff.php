<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB as DB;
class Staff extends Authenticatable


{
    use Notifiable;

    protected $guard = 'staff';

    protected $table = 'staff';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first','last','email','dob','dateofhire','ssn','address', 'phonenumber','staff_type','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

 function scopeusercount () {
        return User::all()->count; 
    }

    /**
 * Retrieves the acceptable enum fields for a column
 *
 * @param string $column Column name
 *
 * @return array
 */
public  function scopestafftype () {
    // Create an instance of the model to be able to get the table name
    $instance = new static; // create an instance of the model to be able to get the table name
    $type = DB::select( DB::raw("SHOW COLUMNS FROM homestead.staff WHERE Field = 'staff_type'") )[0]->Type;
    preg_match('/^enum\((.*)\)$/', $type, $matches);
    $enum = array();
    foreach(explode(',', $matches[1]) as $value){
        $v = trim( $value, "'" );
        $enum[] = $v;
    }
    return $enum;
}
}
