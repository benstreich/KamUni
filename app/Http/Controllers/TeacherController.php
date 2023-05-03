<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\TeacherRegistration;
use App\Models\Subject;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //

    public function courses(){
        return view('teachersites/courses_teacher/courses_teacher');
    }

    public function profile(){
        
       
        $courses = array();
        
            $data = TeacherRegistration::find(Session::get('loginId'));
            $courses = Subject::where('teacher_id', '=', Session::get('loginId'))->get();
        
        return view('teachersites/profile_teacher', compact('data', 'courses'));
    }


        public function update(Request $request, $id)
        {
            $course = Subject::find($id);
            $course->subject = $request->input('subject');
            $course->save();
        
            return response()->json(['success' => true]);

        }
        
      

   

}
