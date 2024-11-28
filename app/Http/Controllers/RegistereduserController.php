<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules\File;
use App\Models\User;
use Redirect;
class RegistereduserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $userAttributes = request()->validate([
        'name' => ['required'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'confirmed', Password::min(6)],
    ]);

    $employerAttributes = request()->validate([
        'employer' => ['required'],
        'logo' => ['required', 'file', 'mimes:png,jpg,webp', 'max:2048'], // Validate file upload
    ]);

    // Create the user
    $user = User::create($userAttributes);

    // Store the logo file
    $logopath = $request->file('logo')->store('logos');

    // Create the employer and associate it with the user
    $user->employer()->create([  // Use 'employer()' method to create the related model
        'name' => $employerAttributes['employer'],
        'logo' => $logopath,
    ]);

    // Log the user in
    Auth::login($user);

    // Redirect to the home page
    return redirect('/');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
