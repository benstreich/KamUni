<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //

    public function courses(){
        return view('teachersites/courses_teacher/courses_teacher');
    }
}
