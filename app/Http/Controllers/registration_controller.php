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
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
        $request->validate(
            [
              'firstname'=>'required',
              'lastname'=>'required',
              'email'=>'required|email|unique:registration',
              'password'=>'required|min:6|max:30',
            ],
            [
              'firstname.required'=>'Vorname eingeben!', 
              'lastname.required'=>'Nachname eingeben!',
              'email.required'=>'Email eingeben!',
              'password.required'=>'Passwort eingeben!', 
            ]
        
        );
        $user = new Registration();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;
        $res = $user->save();

        if($res)
        {
            return view('welcome');
        }
        else{
            return back()->with('fail', 'Fehler');
        }
    }
}
