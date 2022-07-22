<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FlightBooking;
use App\Models\HajjQuery;
use App\Models\HoltelBooking;
use App\Models\PackageTourQuery;
use App\Models\StudentVisaQuery;
use App\Models\TouristVisaQuery;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    //     $this->middleware('guest:user')->except('logout');
    //     $this->middleware('guest:admin')->except('logout');
    // }
    /**
     * Redirect to admin login page
     * 
     * @return mixed
     */
    public function loginForm()
    {
        return view('admin.auth.login');
    }
    /**
     * Admin login
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }

        // if unsuccessful, then redirect back to the login with the form data
        session()->flash('message', 'Password or email is wrong.Please try again.');
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    /**
     * Admin dashboard
     */
    public function dashboard()
    {
        $total_hotel_bookings = HoltelBooking::all()->count();
        $latest_hotel_bookings = HoltelBooking::orderBy('id', 'DESC')->get()->take(5);

        $total_flight_bookings = FlightBooking::all()->count();
        $latest_flight_bookings = FlightBooking::orderBy('id', 'DESC')->get()->take(5);

        $total_hajj_bookings = HajjQuery::all()->count();
        $latest_hajj_bookings = HajjQuery::orderBy('id', 'DESC')->get()->take(5);

        $total_tour_bookings = PackageTourQuery::all()->count();
        $latest_tour_bookings = PackageTourQuery::orderBy('id', 'DESC')->get()->take(5);

        $total_student_visa = StudentVisaQuery::all()->count();
        $latest_student_visa = StudentVisaQuery::orderBy('id', 'DESC')->get()->take(5);

        $total_tourist_visa = TouristVisaQuery::all()->count();
        $latest_tourist_visa = TouristVisaQuery::orderBy('id', 'DESC')->get()->take(5);

        return view('admin.dashboard.dashboard')->with(
            [
                'total_hotel_bookings' => $total_hotel_bookings,
                'latest_hotel_bookings' => $latest_hotel_bookings,
                'total_flight_bookings' => $total_flight_bookings,
                'latest_flight_bookings' => $latest_flight_bookings,
                'total_hajj_bookings' => $total_hajj_bookings,
                'latest_hajj_bookings' => $latest_hajj_bookings,
                'total_tour_bookings' => $total_tour_bookings,
                'latest_tour_bookings' => $latest_tour_bookings,
                'total_student_visa' => $total_student_visa,
                'latest_student_visa' => $latest_student_visa,
                'total_tourist_visa' => $total_tourist_visa,
                'latest_tourist_visa' => $latest_tourist_visa,
            ]
        );
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
