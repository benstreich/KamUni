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
use App\Models\Registration;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
       return view('auth.forget_Password');
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




        // User::table('password_resets_tokens')->insert([
        //     'email' => $request->email, 
        //     'token' => $token,
        //     'created_at' => Carbon::now()
        //   ]);

        Mail::send('auth.forget_Password', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function showResetPasswordForm($token) { 
        return view('auth.forget_Password_Link', ['token' => $token]);
     }

     public function submitResetPasswordForm(Request $request)
     {
         $request->validate([
             'email' => 'required|email|exists:users',
             'password' => 'required|string|min:6|confirmed',
             'password_confirmation' => 'required'
         ]);
 
         $updatePassword = User::table('password_resets_tokens')
                             ->where([
                               'email' => $request->email, 
                               'token' => $request->token
                             ])
                             ->first();
 
         if(!$updatePassword){
             return back()->withInput()->with('error', 'Invalid token!');
         }
 
         $user = registration::where('email', $request->email)
                     ->update(['password' => Hash::make($request->password)]);

         User::table('password_resets_tokens')->where(['email'=> $request->email])->delete();
 
         return redirect('/login')->with('message', 'Your password has been changed!');
     }
}
