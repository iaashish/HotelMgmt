<?php

namespace App\Http\Controllers\manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class managerController extends Controller
{
    //



	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('manager.managerhome');
    }

    
}