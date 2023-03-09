<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('/register');
});

Route::get('welcome_signedin', function(){
    return view('welcome_signedin');
});

Route::get('/welcome_teacher_login', function(){
    return view('/teachersites/startsite/welcome_teacher_login');
});

Route::get('/welcome_teacher_signedin', function(){
    return view('/teachersites/startsite/welcome_teacher_signedin');
});
Route::post('/register', function () {


    $request = request();

  


    $registration = new \App\Models\Registration();
    $registration->firstname = $request->get('firstname');
    $registration->lastname = $request->get('lastname');
    $registration->email = $request->get('email');
    $registration->password = Hash::make($request->get('password'));;
    $registration->save();

    return redirect('register');
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






