<?php

namespace App\Http\Controllers\manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Staff as Staff;

class ManagerController extends Controller
{
    //


    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {

        $columndata = Staff::staffcolumns();
        return view('manager.managerhome')
            ->with('columndata', $columndata)
            ->with('title','Manager Home Page')
            ->with('classnamehome','classnamehome')
            ->with('classnameaddstaff','')
            ->with('classnamemanagestaff','');
    }


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

    public function addstaff(){
        $data = Staff::stafftype();
        return view('manager.manageraddstaff')
            ->with('data', $data)
            ->with('title','Add Staff')
            ->with('classnameaddstaff','classnameaddstaff')
            ->with('classnamehome','')
            ->with('classnamemanagestaff','');

    }
    public function managestaff(){
        $data = Staff::stafftype();
        $getstaffname = Staff::staffnames();
        return view('manager.managermange')
            ->with('data', $data)
            ->with('staffnames', $getstaffname)
            ->with('title','Manage Staff')
            ->with('classnamemanagestaff','classnamemanagestaff')
            ->with('classnameaddstaff','')
            ->with('classnamehome','');

    }
}