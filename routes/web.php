<?php

use App\Http\Controllers\DateController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\registration_controller;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TeacherRegistrationController;
use App\Models\TeacherRegistration;
use Illuminate\Auth\Events\Login;
use App\Http\Controllers\TeacherLoginController;
use App\Http\Middleware\AlreadyLoggedIn;

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

Route::get('/start', function(){
    return view('welcome_signedin');
})->middleware('isLoggedIn');


Route::get('/teacher_schedule/save/{date}', [DateController::class, 'save']);

Route::get('/teacher_schedule', [DateController::class, 'get']);


Route::get('/welcome_teacher_login', function(){
    return view('/teachersites/startsite/welcome_teacher_login');
});

Route::get('/welcome_teacher_signedin', function(){
    return view('/teachersites/startsite/welcome_teacher_signedin');
});

Route::get('/register_teacher', function(){
    return view('/auth/register_teacher');
});

Route::get('/login_teacher', function(){
    return view('/auth/login_teacher');
});

Route::get('/login-t', [TeacherLoginController::class, 'login-t'])->middleware('alreadyLoggedIn');
Route::post('/login-teacher', [TeacherLoginController::class, 'loginTeacher'])->name('login-teacher');

Route::get('register-t', [TeacherRegistrationController::class, 'register-t']);
Route::post('register-teacher', [TeacherRegistrationController::class, 'registerTeacher'])->name('register-teacher');

Route::get('courses_signed', function(){
    return view('courses_signed');
})->middleware('isLoggedIn');

Route::get('/courses', function () {
    return view('courses_unsigned');
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
Route::get('/about_us_signed', function () {
    return view('about_us_signed_in');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('profile', [LoginController::class, 'profile'])->middleware('isLoggedIn');
Route::get('logout', [LoginController::class, 'logout']);

Route::get('/sel_teacher', function () {
    return view('sel_teacher');
});

Route::get('/sel_teacher', [TeacherRegistrationController::class, 'list']);


Route::get('courses_teacher', [TeacherController::class, 'courses']);


