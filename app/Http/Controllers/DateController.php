<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Date;

class DateController extends Controller
{
    //


public function load(){
    $id = Date::all();
    return view('/teachersites/teacher_schedule', [
        'id' => $id
    ]);
   
}

    public function save(){

        $dates = [
            


        ];
      

    } 
}
