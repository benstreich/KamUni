<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Registration as Authenticatable;



class Registration extends Model
{
    use HasFactory;

    public $table = 'registration';
}
