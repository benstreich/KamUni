<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'teacher_subject'; 


    public $guarded = [];
   
    public function teachers()
    {
        return $this->belongsTo(TeacherRegistration::class, 'teacher_id');
    }
}
