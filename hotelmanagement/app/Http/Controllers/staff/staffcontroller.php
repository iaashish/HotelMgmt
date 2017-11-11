<?php

namespace App\Http\Controllers\staff;

use App\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Spatie\Permission\Models\Permission;
use Debugbar;
use Spatie\Permission\Traits\HasRoles;

use Spatie\Permission\Models\Role;

class staffcontroller extends Controller
{


    use HasRoles;

    public function showhomepage()
    {

        return view('staff.staffhome');

    }

        public function index()
    {
        return view('staff.staffhome');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth:staff');
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /*    public function index()
        {
            return view('admin');
        }*/


    public function registerStaff(Request $request)
    {
        Debugbar:info($request);
        $this->redirectTo = "/managerhome";
        Staff::create([
            'first' => $request->first,
            'last' => $request->last,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'dateofhire' => $request->dateofhire,
            'dob' => $request->dob,
            'phonenumber' => $request->phonenumber,
            'ssn' => $request->ssn,
            'address' => $request->address,
            'staff_type' => $request->staff_type,
        ]);


        return redirect('/managerhome');
    }
}
