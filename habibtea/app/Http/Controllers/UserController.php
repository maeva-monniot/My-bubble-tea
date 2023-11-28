<?php

namespace App\Http\Controllers;


use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    function show(Request $request)
    {
        return view('register');
    }
    //fonction d'inscription
    function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|unique:' . User::class,
            'password' => 'required',
            'adress' => 'required',
            'postal_adress' => 'required',
            'countries' => 'required',
            'city' => 'required',
            'phone' => 'required',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return redirect('order');

    }

    function update(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|unique:' . User::class,
            'password' => 'required',
            'adress' => 'required',
            'postal_adress' => 'required',
            'countries' => 'required',
            'city' => 'required',
            'phone' => 'required',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        User::update($validated);

        return redirect('order');



    }

    function show_profile(Request $request)
    {
        return view('profile');
    }

    function show_login(Request $request)
    {
        return view('login');
    }
}
