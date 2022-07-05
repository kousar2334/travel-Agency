<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return view('admin.dashboard.dashboard');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
