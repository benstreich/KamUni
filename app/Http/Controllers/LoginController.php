<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    

    public function loginUser(Request $request)
    {
        $request->validate(
        [
            'email' => 'required|email',
            'password' => 'required'
        ],

        [
            'email.required'=>'Email eingeben!',
            'password.required'=>'Passwort eingeben!'
        ],
       
    );

    $user = Registration::where('email', '=', $request->email)->first();
         if($user)
         {
            if(Hash::check($request->password, $user->password)){
                return redirect('/');
            }
            else{
                return back()->with('fail', 'Passwort stimmt nicht überein.');
            }

         }
         else{
            return back()->with('fail', 'Diese Email wurde noch nicht registriert');
         }


    }

    

}
