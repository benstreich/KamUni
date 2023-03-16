<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
                $request->session()->put('loginId', $user->id);
                return redirect('/welcome_signedin');
            }
            else{
                return back()->with('fail', 'Passwort stimmt nicht überein.');
            }

         }
         else{
            return back()->with('fail', 'Diese Email wurde noch nicht registriert');
         }


    }

    public function profile()
    {
        $data = array();
        if(Session::has('loginId')){
            $data = Registration::where('id', '=', Session::get('loginId'))->first();
        }
        return view('profile', compact('data'));
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }

    

}
