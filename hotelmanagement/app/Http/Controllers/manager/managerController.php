<?php

namespace App\Http\Controllers\manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Staff as Staff;

class managerController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Staff::stafftype();
        $columndata = Staff::staffcolumns();
        return view('manager.managerhome')->with('data', $data)->with('columndata', $columndata);
    }


public function registerStaff(Request $request)
    {
        Debugbar:info($request);
        
        $this->validate($request, [
            'first' =>'required',
            'last' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'dateofhire' => 'required|date',
            'dob' => 'required|date|before:today',
            'phonenumber' => 'required',
            'ssn' => 'required|digits:9',
            'address' => 'required',
            'staff_type' => 'required'
        ]);

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
            'staff_type' => $request->staff_type
        ]);


        return redirect('/managerhome');
    }

}