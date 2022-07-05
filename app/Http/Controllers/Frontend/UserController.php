<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:user')->except('logout');
    }
    /**
     * Redirect to user registration form
     * 
     * @return mixed
     */
    public function registrationForm()
    {
        return view('frontend.pages.auth.signup');
    }
    /**
     * New user register
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function createUser(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'unique:users,phone'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        try {
            $user = new User;
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->phone = $request['phone'];
            $user->password = Hash::make($request['password']);
            $user->save();
            return redirect()->route('frontend.login');
        } catch (\Exception $e) {
        } catch (\Error $e) {
        }
    }
    /**
     * Redirect to login page
     *  
     */
    public function loginPage()
    {
        return view('frontend.pages.auth.login');
    }
    /**
     * User login 
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'exists:users,email'],
            'password' => ['required'],
        ]);
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password],)) {
            return redirect()->intended(route('home'));
        }
        session()->flash('message', 'Password or email is wrong.Please try again.');
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    /**
     * User logout
     * 
     * @param \Illuminate\Http\Request $request
     * 
     */
    public function logout(Request $request)
    {
        Auth::guard('user')->logout();
        return redirect('/');
    }
}
