<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public $table = 'teacher_subject'; 
   
    public function teacher()
    {
        return $this->belongsTo(TeacherRegistration::class);
    }
}