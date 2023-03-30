<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\TeacherRegistration;

class TeacherRegistrationController extends Controller
{
    public function TeacherRegistration()
    {
        return view('auth.register_teacher');
    }

    public function registerTeacher(Request $request)
    {
        $request->validate(
            [
              'firstname'=>'required',
              'lastname'=>'required',
              'email'=>'required|email|unique:registration',
              'password'=>'required|min:6|max:30',
              //'certificate'=>'required',
            ],
            [
              'firstname.required'=>'Vorname eingeben!', 
              'lastname.required'=>'Nachname eingeben!',
              'email.required'=>'Email eingeben!',
              'password.required'=>'Passwort eingeben!', 
             //'certificate.required'=>'Zertifikat einfügen', 
            ]
        
        );
        $teacher = new TeacherRegistration();
        $teacher->firstname = $request->firstname;
        $teacher->lastname = $request->lastname;
        $teacher->email = $request->email;
        $teacher->password = Hash::make($request->password);
        $teacher->certificate = $request->certificate;
        $res = $teacher->save();

        if($res)
        {
            return view('/welcome_teacher_login');
        }
        else{
            return back()->with('fail', 'Fehler');
        }
    }
}
