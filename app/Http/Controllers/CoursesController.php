<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class CoursesController extends Controller
{
    //

    public function show(){

        return view('courses_signed');
    }

   
}
