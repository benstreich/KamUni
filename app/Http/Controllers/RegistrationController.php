<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function register()
    {
        return view('auth.register');
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
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if($res)
        {
            return redirect('/start');
        }
        else{
            return back()->with('fail', 'Fehler');
        }
    }
}
