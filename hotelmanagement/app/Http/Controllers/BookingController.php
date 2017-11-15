<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking as Booking;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RedirectsUsers;

class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:staff');
    }

    protected $table = "booking";

    public function registerbooking(Request $request)
    {

        Booking::create([
            'first' => $request->first,
            'last' => $request->last,
            'email' => $request->email,
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
            'payment' => '123',

        ]);
        return redirect("/staffhome");
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('booking');
    }
}
