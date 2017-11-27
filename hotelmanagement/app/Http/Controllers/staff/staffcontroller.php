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
use Spatie\Permission\Models\Role;
use Debugbar;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;

class staffcontroller extends Controller
{
    use HasRoles;

    public function showhomepage()
    {
        $data = Booking::all();
        $tasks = Task::where('staff_id', Auth::user()->id)->get();
        $accountant = DB::table('staff')
            ->join('accountant', 'staff.id', '=', 'accountant.staff_id')
            ->select('staff.first', 'staff.last', 'staff.ssn', 'staff.staff_type', 'accountant.id', 'accountant.salary')
            ->get();
        Debugbar::info($data);
        $roles = Role::all();
        return view('staff.staffhome')->with('title', 'Staff Home page')
            ->with('data', $data)
            ->with('task', $tasks)
            ->with('accountant', $accountant)
            ->with('roles', $roles);
    }

    public function changeDropDown($id)
    {
        $staffnames = Staff::where('staff_type', $id)->get();
        $staffnamesw = Staff::where('staff_type', '=', $id)->whereNotIn('id', function ($query) {
            $query->select('staff_id')
                ->from('accountant');
        })->orderBy('id','desc')->get();

        $html = '';
        foreach ($staffnamesw as $package) {
            $html .= '<option value="' . $package->id . '"> ' . $package->first . ' ' . $package->last . ' </option>';
        }
        return $html;

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
