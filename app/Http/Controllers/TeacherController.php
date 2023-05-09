<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use Illuminate\Support\Facades\Session;
use App\Models\TeacherRegistration;
use App\Models\Subject;

use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function courses(){
        return view('teachersites/courses_teacher/courses_teacher');
    }

    public function profile(){
        
       
        $courses = array();
        
            $data = TeacherRegistration::find(Session::get('loginId'));
            $courses = Subject::where('teacher_id', '=', Session::get('loginId'))->get();
        
        return view('teachersites/profile_teacher', compact('data', 'courses'));
    }

    public function updateProfile(Request $request)
    {
        $user = TeacherRegistration::where('email', '=', $request->email)->first();
        
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'The email is not registered.']);
        }

        //$user->image = $request->file('profimg')->store('public/profileimg');
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->new_email ?: $request->email;
        $user->desc = $request->desc;
        $user->save();
        return redirect('/profile_teacher');
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
        }
    }

    public function delete(Request $request){
        $course = Subject::find($request->input('course_id'));
    
        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }
    
        $course->delete();
    
        return redirect()->back();
    }
    
    
    
         
    public function info($id){


        $subject = array();

        $teacher = TeacherRegistration::find($id);
        $subject =Subject::where('teacher_id', $id)->get();

        return view('display_info_teacher', [
            'teacher' => $teacher,
            'subject' => $subject
        ]);

    }


    public function book($id, $subject_id){

        $teacher = TeacherRegistration::find($id);
        $data = Registration::find(Session::get('loginId'));
        $subject = Subject::findOrFail($subject_id);


        return view('book_teacher',[
            'teacher' => $teacher,
            'data' => $data,
            'subject' => $subject
        ]);
    }
   

    public function send($emailtosent){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $name = $_POST['name'];
          $vorname = $_POST['vorname'];
          $addresse = $_POST['addresse'];
          $email = $_POST['email'];
          $teacher_vorname = $_POST['teacher_vorname'];
          $teacher_nachname = $_POST['teacher_nachname'];
          $fach = $_POST['fach'];
          $datum = $_POST['datum'];
          $zeit = $_POST['zeit'];
          $preis = $_POST['preis'];
        $mitteilung = $_POST['mitteilung'];
        }

        $to = '$emailtosent';
        $betreff = 'Neue Buchung von:' . $vorname .$name. 'Tutor:'. $teacher_vorname. $teacher_nachname;
        $message_body = "Vorname: $vorname\n Nachname: $name\n Addresse: $addresse\n Email: $email\n\n\n
        
        Gebuchtes Fach: $fach\n Datum: $datum\n Zeit: $zeit\n Preis: $preis\n\n\n

        
        $mitteilung
        ";


        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-type: text/plain; charset=utf-8\r\n";


        if(mail($to, $betreff, $message_body, $headers))
        {
            echo 'email has been sent';
        }
         else {
        echo 'There was an error sending your message. Please try again later.';
        }

    }











}
