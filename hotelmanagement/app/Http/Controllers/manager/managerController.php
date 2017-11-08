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
        return view('manager.managerhome')->with('data',$data);
    }

    
}