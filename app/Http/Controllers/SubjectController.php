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
        Subject::create([
            'teacher_id' => $request->teacher_id,
            'subject' => $request->input('subject'),
            'date' => $request->input('date'),
            'time' => $request->input('time')
        ]);
        
    
        return view('teachersites/create_subject');
    }
}
