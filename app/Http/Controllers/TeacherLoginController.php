<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherRegistration;
use Illuminate\Auth\Events\Teacherlogin;
use Illuminate\Support\Facades\Hash;

class TeacherLoginController extends Controller
{
    public function Teacherlogin()
    {
        return view('auth.login_teacher');
    }

    public function loginTeacher(Request $request)
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

    $teacher = TeacherRegistration::where('email', '=', $request->email)->first();
         if($teacher)
         {
            if(Hash::check($request->password, $teacher->password)){
                $request->session()->put('loginId', $teacher->id);
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
