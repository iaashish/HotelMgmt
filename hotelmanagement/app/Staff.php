<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB as DB;
use Spatie\Permission\Traits\HasRoles;


class Staff extends Authenticatable

{
    use HasRoles;
    use Notifiable;

    protected $guard = 'staff';

    protected $table = 'staff';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first', 'last', 'email', 'dob', 'dateofhire', 'ssn', 'address','staff_type', 'phonenumber',  'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function scopeusercount()
    {
        return User::all()->count;
    }

    /**
     * Retrieves the acceptable enum fields for a column
     *
     * @param string $column Column name
     *
     * @return array
     */
    public function scopestafftype()
    {
        // Create an instance of the model to be able to get the table name
        $instance = new static; // create an instance of the model to be able to get the table name
        $type = DB::table('roles')->select('name')->get();

        $enum = array();
        foreach ($type as $name) {
            $enum[] = $name->name;
        }
        return $enum;
    }

    public function scopestaffcolumns()
    {

        return DB::table('staff')->paginate(5);
    }

    public function scopestaffnames()
    {

        $type = Staff::all();
        $enum = array();
        foreach ($type as $value) {
            $enum[] = $value->first." ".$value->last;

        }
        return $type;


    }


}
