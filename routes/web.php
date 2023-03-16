<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\registration_controller;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TeacherRegistrationController;
use App\Models\TeacherRegistration;
use Illuminate\Auth\Events\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', [LoginController::class, 'login']);
Route::post('login-user', [LoginController::class, 'loginUser'])->name('login-user');

Route::get('register', [RegistrationController::class, 'register']);
Route::post('register-user', [RegistrationController::class, 'registerUser'])->name('register-user');

Route::get('welcome_signedin', function(){
    return view('welcome_signedin');
});

Route::get('/welcome_teacher_login', function(){
    return view('/teachersites/startsite/welcome_teacher_login');
});

Route::get('/welcome_teacher_signedin', function(){
    return view('/teachersites/startsite/welcome_teacher_signedin');
});

Route::get('/register_teacher', function(){
    return view('/auth/register_teacher');
});

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login-teacher', [LoginController::class, 'loginTeacher'])->name('login-teacher');

Route::get('register', [TeacherRegistrationController::class, 'register']);
Route::post('register-teacher', [TeacherRegistrationController::class, 'registerTeacher'])->name('register-teacher');

Route::get('/courses_unsigned', function(){
    return view('/courses_unsigned');
});


Route::get('/courses', function () {
    return view('courses');
});

Route::get('/courses_english', function () {
    return view('courses_english');
});

Route::get('/courses_french', function () {
    return view('courses_french');
});

Route::get('/courses_german', function () {
    return view('courses_german');
});

Route::get('/courses_math', function () {
    return view('courses_math');
});

Route::get('/courses_science', function () {
    return view('courses_science');
});

Route::get('/about_us', function () {
    return view('about_us');
});
