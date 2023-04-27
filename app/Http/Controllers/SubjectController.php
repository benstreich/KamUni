<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    public function store(Request $request)
    {
        $newSubject = new Subject;
        $newSubject->subject = $request->input('subject');
        $newSubject->date = $request->input('date');
        $newSubject->time = $request->input('time');
        $newSubject->save();

    
        return redirect()->back()->with('success', 'Selected options saved!');
    }
}
