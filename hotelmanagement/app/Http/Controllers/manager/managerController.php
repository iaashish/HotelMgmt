<?php

namespace App\Http\Controllers\manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Staff as Staff;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Debugbar;

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
            ->with('title', 'Manager Home Page')
            ->with('classnamehome', 'classnamehome')
            ->with('classnameaddstaff', '')
            ->with('classnamemanagestaff', '')
            ->with('classnameroles', '');
    }


    public function registerStaff(Request $request)
    {
        Debugbar::info($request);
       $this->redirectTo = "/managerhome";
        $validatedData = $request->validate([
            'first' => 'required',
            'last' => 'required',
            'email' => 'required|email',
             'password' => 'required|min:6',
              'dateofhire' => 'required|date',
              'dob' => 'required|date',
              'phonenumber' => 'required',
              'ssn' => 'required|digits:9',
              'address' => 'required'
        //     // 'staff_type' => ''
         ]);

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
            'staff_type' => ''
        ]);


        return redirect('/managerhome');
    }

    public function addstaff()
    {
        $data = Staff::stafftype();
        return view('manager.manageraddstaff')
            ->with('data', $data)
            ->with('title', 'Add Staff')
            ->with('classnameaddstaff', 'classnameaddstaff')
            ->with('classnamehome', '')
            ->with('classnamemanagestaff', '')
            ->with('classnameroles', '');

    }

    public function managestaff()
    {
        $data = Staff::stafftype();
        $getstaffname = Staff::staffnames();
        return view('manager.managermange')
            ->with('data', $data)
            ->with('staffnames', $getstaffname)
            ->with('title', 'Manage Staff')
            ->with('classnamemanagestaff', 'classnamemanagestaff')
            ->with('classnameaddstaff', '')
            ->with('classnamehome', '')
            ->with('classnameroles', '');

    }

    public function manageroles()
    {
        $role = Role::all();
        $staff = Staff::all();
        return view('manager.managerroles')
            ->with('staff', $staff)
            ->with('role', $role)
            ->with('title', 'Manage Roles')
            ->with('classnamemanagestaff', '')
            ->with('classnameaddstaff', '')
            ->with('classnamehome', '')
            ->with('classnameroles', 'classnameroles');
    }

    public function assignRole(Request $request)
    {
        $user = Staff::find($request->item_id);
        $rolename = Role::find($request->role);
        Debugbar::info($rolename->name);
        $user->assignRole($rolename->name);
//        $warehouses = Staff::whereNotIn('id', function ($query) {
//            $query->select('model_id')
//                ->from('model_has_roles')
//                ->where('role_id', '=', '1');
//        })->get();
//        $staff = Staff::all();
//        Debugbar::info($staff);
        return redirect('/managerroles');
    }


    public function changeDropDown($id)
    {
        $warehouses = Staff::whereNotIn('id', function ($query) use ($id) {
            $query->select('model_id')
                ->from('model_has_roles')
                ->where('role_id', '=', [$id]);
        })->get();
        $html = '';
        foreach ($warehouses as $package) {
            $html .= '<option value="' . $package->id . '"> ' . $package->first . ' ' . $package->last . ' </option>';
        }
        return $html;
    }
}