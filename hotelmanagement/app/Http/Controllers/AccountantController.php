<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Debugbar;
use App\Accountant;

class AccountantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:staff');
    }


    public function addSalary(Request $request){

        Debugbar::info("Add Salary");
        Accountant::create([
            'staff_id' => $request->staffid,
            'salary' => $request->salary,
        ]);

        $accountant= Accountant::all();

       return redirect('/staffhome')->with('accountant', $accountant);
    }
}
