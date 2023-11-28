<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\users;

class LoginController extends Controller
{

    function show(Request $request)
    {
        return view('login');
    }
    function login(Request $request)
    {

        $credential = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"],
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            $user = Auth::user();
            return redirect("order");
        }

    }
}