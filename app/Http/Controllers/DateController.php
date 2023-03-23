<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Date;

class DateController extends Controller
{
    //


    public function get(){
        return view('teachersites/teacher_schedule');
    }

    public function save($date){

       $datesm = request();

       $datesm = new \App\Models\Date();
       $datesm->date = $date;
       $datesm->save();
      
       return view('teachersites/teacher_schedule');
      
    } 
}
