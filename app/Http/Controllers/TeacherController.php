<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\TeacherRegistration;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //

    public function courses(){
        return view('teachersites/courses_teacher/courses_teacher');
    }

    public function profile(){

        $data = array();
        if(Session::has('loginId')){
           
            $data = TeacherRegistration::where('id', '=', Session::get('loginId'))->first();
            $courses = $data->courses;
        }
        return view('teachersites/profile_teacher', compact('data', 'courses'));
    }


   

}
