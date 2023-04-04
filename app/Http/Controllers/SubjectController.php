<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    public function store(Request $request)
    {
        $selectedOptions = $request->input('subjects');

        foreach ($selectedOptions as $option) {
            $subject = new Subject;
            $subject->name = $option;
            $subject->save();
        }

        return redirect()->back()->with('success', 'Selected options saved!');
    }
}
