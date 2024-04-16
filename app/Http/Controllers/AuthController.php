<?php

namespace App\Http\Controllers;

use App\Models\User;
use illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginDisplay()
    {
        return view('loginform');
    }
    public function registerDisplay()
    {
        return view('register');
    }
    public function registering(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:30',
            'cpassword' => 'required|min:8|max:30|same:password',
        ]);

        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = \Hash::make($request->password);
        $save = $users->save();

        if ($save) {
            return view('loginform')->with('success', 'You are now registerd. Please login to proceed.');
            // return redirect()->route('loginDisplay')->with('success', 'You are now registerd. Please login to proceed.');
        } else {
            return redirect()->back()->with('fail', 'Something is wrong');
        }
    }
    public function home()
    {

        return view('dashboard');

    }

    public function logincheck()
    {
        if (auth::user()) {
            $route = $this->redirectdash();
            return redirect($route);
        }
        return view('loginform');
    }
    public function redirectDash()
    {
        $redirect = '';

        if (Auth::user()) {
            $redirect = '/admin/dashboard';
        }
        return $redirect;
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|exists:users,email',
            'password' => 'required|string|min:8|max:30'
        ], [
            'email.exists' => 'This email is not exist in user table.'
        ]);

        $creds = $request->only('email', 'password');
        if (Auth::attempt($creds)) {
            $route = $this->redirectDash();
            return redirect($route);
        } else
            return back()->with('fail', 'Invalid Email or Password');

    }
    public function logout()
    {
        session::flush();
        Auth::logout();
        return redirect('/');
    }
}