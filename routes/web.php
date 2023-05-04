<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\ForgotPasswordController;
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
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('login', [LoginController::class, 'login'])->middleware('alreadyLoggedIn');
Route::post('login-user', [LoginController::class, 'loginUser'])->name('login-user');

Route::get('register', [RegistrationController::class, 'register']);
Route::post('register-user', [RegistrationController::class, 'registerUser'])->name('register-user');

Route::get('/start', function(){
    return view('welcome_signedin');
})->middleware('isLoggedIn');



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

Route::get('courses_signed', [CoursesController::class, 'show'])->middleware('isLoggedIn');

Route::get('/courses', function () {
    return view('courses_unsigned');
});



Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/about_us_signed', function () {
    return view('about_us_signed_in');
});

Route::get('/about_us_teacher', function () {
    return view('about_us_teacher');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('profile', [LoginController::class, 'profile', 'updateProfile'])->middleware('isLoggedIn');
Route::post('profile', [LoginController::class, 'updateProfile'])->middleware('isLoggedIn');
Route::get('logout', [LoginController::class, 'logout']);

Route::get('/sel_teacher', function () {
    return view('sel_teacher');
})->middleware('isLoggedIn');

Route::get('/sel_courses', [TeacherRegistrationController::class, 'list'])->middleware('isLoggedIn');


Route::get('courses_teacher', [TeacherController::class, 'courses']);



Route::post('/create_subject_store', [SubjectController::class, 'store'])->name('subjects.store');


Route::get('create_subject', function (){
    $teacher_id = Session::get('loginId');
    return view('teachersites/create_subject', [
        'teacher_id' => $teacher_id,
    ]);
});

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');



Route::get('profile_teacher', [TeacherController::class, 'profile']);
Route::post('profile_teacher', [TeacherController::class, 'updateProfile']);
Route::get('logout', [TeacherController::class, 'logout']);

Route::post('profile_teacher_edit_store/{id}', [TeacherController::class, 'update']);

Route::get('handle_box_click', [TeacherRegistrationController::class, 'handleBoxClick']);


