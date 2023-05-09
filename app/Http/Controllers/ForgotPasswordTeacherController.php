<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Mail; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon; 
use kamuni;
use App\Models\TeacherRegistration;

class ForgotPasswordTeacherController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('auth.forget_Password_Teacher');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $token = Str::random(64);

        $reset = new PasswordReset();
        $reset->email = $request->email;
        $reset->token = $token;
        $reset->save();

        Mail::send('email.forget_password_teacher', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function showResetPasswordForm($token) { 
        return view('auth.forget_Password_Teacher_Link', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:teachers_registration',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = PasswordReset::where([
            'email' => $request->email, 
            'token' => $request->token
        ])->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $teacher = TeacherRegistration::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        PasswordReset::where(['email'=> $request->email])->delete();

        return redirect('/login_teacher')->with('message', 'Your password has been changed!');
    }
}