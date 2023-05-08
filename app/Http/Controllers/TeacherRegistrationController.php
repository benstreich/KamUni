<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\TeacherRegistration;
use App\Models\Subject;
use Illuminate\Support\Facades\Session;


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
              'certificate'=>'required',
            ],
            [
              'firstname.required'=>'Vorname eingeben!', 
              'lastname.required'=>'Nachname eingeben!',
              'email.required'=>'Email eingeben!',
              'password.required'=>'Passwort eingeben!', 
              'certificate.required'=>'Zertifikat einfügen', 
            ]
        
        );

        $teacher = new TeacherRegistration();
        $teacher->firstname = $request->firstname;
        $teacher->lastname = $request->lastname;
        $teacher->email = $request->email;
        $teacher->password = Hash::make($request->password);
        $teacher->certificate = $request->file('certificate')->store('images');
        $res = $teacher->save();

        if($res)
        {
            return redirect('/welcome_teacher_login');
        }
        else{
            return back()->with('fail', 'Fehler');
        }
    }

    public function list($subject_clicked)
    {

        if ($subject_clicked == 1)
       Session::put('temp_id', 1);

       else if($subject_clicked == 2)
       Session::put('temp_id', 2);

       else if($subject_clicked == 3)
       Session::put('temp_id', 3);

       else if($subject_clicked == 4)
       Session::put('temp_id', 4);

       else if($subject_clicked == 5)
       Session::put('temp_id', 5);

        
       $teachers = Subject::where('subjectid', '=', Session::get('temp_id'))->get();
       $registrations = TeacherRegistration::all();
       
       return view('sel_courses', [
           'teachers' => $teachers,
           'registrations' => $registrations
       ]);
       
    }


   


}
