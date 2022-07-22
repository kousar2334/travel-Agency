<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\HajjQuery;
use Illuminate\Http\Request;
use App\Models\FlightBooking;
use App\Models\HoltelBooking;
use App\Models\PackageTourQuery;
use App\Models\StudentVisaQuery;
use App\Models\TouristVisaQuery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

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
    /**
     * Will logout admin
     *
     *@return mixed
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
    /**
     * Will return users list
     * 
     * @return mixed
     */
    public function users()
    {
        return view('admin.pages.users.index')->with([
            'users' => Admin::orderBy('id', 'DESC')->get()
        ]);
    }
    /**
     * redirect to new user page
     * 
     * @return mixed
     */
    public function newUser()
    {
        return view('admin.pages.users.new_user');
    }
    /**
     * Will store new user
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function storeNewUser(Request $request)
    {
        $request->validate([
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'email', 'unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if ($request->has('image')) {
            $directory = "uploads/user/";
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $extension = pathinfo($imageName, PATHINFO_EXTENSION);
            $imageName = date('mdYHis') . 'user.' . $extension;
            $image->move(public_path($directory), $imageName);
            $image = $directory . '' . $imageName;
            $p_image = $image;
        } else {
            $p_image = "";
        }
        try {
            $user = new Admin;
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->image = $p_image;
            $user->password = Hash::make($request->password);
            $user->save();
            toastNofication('success', 'New user added successfully');
            return redirect()->route('admin.users');
        } catch (\Exception $e) {
            toastNofication('error', 'user create failed');
            return redirect()->back();
        }
    }
    /**
     * Will delete user
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function deleteUser(Request $request)
    {
        try {
            $user = Admin::findOrFail($request['id']);
            $user->delete();
            toastNofication('success', 'User deleted successfully');
            return redirect()->route('admin.users');
        } catch (\Exception $e) {
            toastNofication('error', 'user delete failed');
            return redirect()->back();
        }
    }
    /**
     * Will redirect user edit page
     *
     * @param Int $id
     * @return mixed 
     */
    public function editUser($id)
    {
        return view('admin.pages.users.edit')->with([
            'user' => Admin::findOrFail($id)
        ]);
    }
    /**
     * Will update  user
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function updateUser(Request $request)
    {
        $request->validate([
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'email', 'unique:admins',
        ]);
        $user = Admin::findOrFail($request['id']);
        if ($request->has('image')) {
            $directory = "uploads/user/";
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $extension = pathinfo($imageName, PATHINFO_EXTENSION);
            $imageName = date('mdYHis') . 'user.' . $extension;
            $image->move(public_path($directory), $imageName);
            $image = $directory . '' . $imageName;
            $p_image = $image;
        } else {
            $p_image = $user->image;
        }
        try {
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->status = $request['status'];
            $user->image = $p_image;
            $user->save();
            toastNofication('success', 'User updated successfully');
            return redirect()->route('admin.users');
        } catch (\Exception $e) {
            toastNofication('error', 'user update failed');
            return redirect()->back();
        }
    }
    /**
     * Update user password
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function updateUserPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:6|confirmed',
        ]);

        try {
            $user = Admin::findOrFail($request['id']);
            $user->password = Hash::make($request->password);
            $user->save();
            toastNofication('success', 'Password updated successfully');
            return redirect()->route('admin.users');
        } catch (\Exception $e) {
            toastNofication('error', 'Password update failed');
            return redirect()->back();
        }
    }
}
