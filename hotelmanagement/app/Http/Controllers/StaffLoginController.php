<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Debugbar;
use Illuminate\Validation\ValidationException;

class StaffLoginController extends Controller
{


    public function showhomepage()
    {

        return view('staff.staffhome');

    }

    public function __construct()
    {
        $this->middleware('guest:staff');
    }

    public function showLoginForm()
    {
        return view('stafflogin');
    }


    public function email()
    {

        return 'email';
    }

    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        // Attempt to log the user in
        if (Auth::guard('staff')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect('/staffhome');
        }
        else {

            throw ValidationException::withMessages([$this->email()=> [trans('auth.failed')]]);
        }
        // if unsuccessful, then redirect back to the login with the form data
        //return redirect()->back()->withInput($request->only('email', 'remember'))->with('wrongcredentials','wrong credential');
    }


    public function logout(Request $request)
    {

        $this->guard('staff')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }


}