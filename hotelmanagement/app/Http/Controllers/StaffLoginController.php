<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Debugbar;
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

    


    public function login(Request $request)
    {
      // Validate the form data
//    	Debugbar::info($request);
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);
      // Attempt to log the user in
      if (Auth::guard('staff')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect('/staffhome');
      }
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }


    public function logout(Request $request)
    {

        $this->guard('staff')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }



}