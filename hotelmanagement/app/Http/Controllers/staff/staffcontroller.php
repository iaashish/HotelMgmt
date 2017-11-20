<?php

namespace App\Http\Controllers\staff;

use App\Booking;
use App\Staff;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Debugbar;
use Spatie\Permission\Traits\HasRoles;

use Spatie\Permission\Models\Role;

class staffcontroller extends Controller
{


    use HasRoles;

    public function showhomepage()
    {

        $data = Booking::all();
        $tasks =  Task::where('staff_id',Auth::user()->id)->get();
        Debugbar::info($data);
        return view('staff.staffhome')->with('title', 'Staff Home page')
            ->with('data', $data)
            ->with('task', $tasks);

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


}
