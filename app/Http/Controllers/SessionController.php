<?php

namespace App\Http\Controllers;

use Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        // Validate the request
        $attributes = request()->validate([
            'email' => ['required', 'email'],  // Ensure the email is required and is a valid email
            'password' => ['required'],        // Ensure the password is required
        ]);
    
        // Attempt to authenticate the user
        if (Auth::attempt($attributes)) {
            // Regenerate the session to prevent session fixation attacks
            request()->session()->regenerate();
    
            // Redirect the user to their intended destination or default '/jobs'
            return redirect()->intended('/');
        }
    
        // If authentication fails, return back with an error message
        return back()->withErrors([
            'email' => 'The provided credentials are incorrect.',
        ]);
    }
    
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
