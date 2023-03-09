<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Registration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class registration_controller extends Controller
{
    function index(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('welcome');
        }
        return redirect('login')->with('success', 'Login details are not valid');
    }

    function welcome()
    {
        if(Auth::check())
        {
            return view('welcome');
        }
        return redirect('login')->with('success', 'you are not allowed to access');
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }
}
