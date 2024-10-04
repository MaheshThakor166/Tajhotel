<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email', // Ensure email is unique
            'password' => 'required|confirmed|min:6', // Ensure password is confirmed and has a minimum length
        ]);

        // Hashing the password before saving
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        if ($user) {
            return redirect()->route('login')->with('success', 'Registration successful. You can now log in.'); // Optional success message
        }

        return back()->withErrors(['error' => 'Registration failed. Please try again.']);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['error' => 'Invalid credentials. Please try again.']); // Handle invalid login attempt
    }

    public function dashboardpage()
    {
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return redirect()->route('login')->withErrors(['error' => 'You need to log in first.']); // Optional error message
        }
    }
}
