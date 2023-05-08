<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\TeacherRegistration;
use App\Models\Subject;

use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function courses(){
        return view('teachersites/courses_teacher/courses_teacher');
    }

    public function profile(){
        
       
        $courses = array();
        
            $data = TeacherRegistration::find(Session::get('loginId'));
            $courses = Subject::where('teacher_id', '=', Session::get('loginId'))->get();
        
        return view('teachersites/profile_teacher', compact('data', 'courses'));
    }

    public function updateProfile(Request $request)
    {
        $user = TeacherRegistration::where('email', '=', $request->email)->first();
        
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'The email is not registered.']);
        }

        //$user->image = $request->file('profimg')->store('public/profileimg');
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->new_email ?: $request->email;
        $user->desc = $request->desc;
        $user->save();
        return redirect('/profile_teacher');
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
        }
    }

    public function delete(Request $request){
        $course = Subject::find($request->input('course_id'));
    
        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }
    
        $course->delete();
    
        return redirect()->back();
    }
    
    
    
         
    public function info($id){

        $teacher = TeacherRegistration::find($id);
        $subject = Subject::where('teacher_id', $id)->first();

        return view('display_info_teacher', [
            'teacher' => $teacher,
            'subject' => $subject
        ]);

    }

   

}
