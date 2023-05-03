<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    public function store(Request $request)
    {

        $teacher_id = Session::get('loginId');

        
        Subject::create([
            'subjectid' => $request->input('subjectid'),
            'teacher_id' => $request->input('teacher_id'),
            'subject' => $request->input('subject'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'price' => $request->input('price')
        ]);
        
    
        return view('teachersites/create_subject', [
            'teacher_id' => $teacher_id,
        ]);
    }

   /*  public function showSubjectForm($teacher_id)
    {
         return view('teachersites/create_subject', ['teacher_id' => $teacher_id]);
    } */
}
