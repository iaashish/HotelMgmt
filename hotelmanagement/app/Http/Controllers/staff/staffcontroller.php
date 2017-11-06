<?php

namespace App\Http\Controllers\staff;

use App\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RedirectsUsers;

class staffcontroller extends Controller
{
    public function showhomepage()
    {

      return view('staff\staffhome');

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*    public function __construct()
    {
        $this->middleware('auth:admin');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
/*    public function index()
    {
        return view('admin');
    }*/


    public function registerStaff(Request $request){

        $this->redirectTo = "/managerhome";
         Staff::create([
            'first' => $request->first,
            'last' => $request->last,
            'email' =>$request->email,
            'password' => bcrypt($request->password),
            'dateofhire' => $request->dateofhire,
            'dob' => $request->dob,
            'phonenumber' => $request->phonenumber,
            'ssn' => $request->ssn,
            'address' => $request->address,
            'staff_type'=>'accountant',
        ]);

         return redirect($this->redirectPath());
    }
}
