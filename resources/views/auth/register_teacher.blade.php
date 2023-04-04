@extends('layouts.master_unsigned')
@section('title', 'Sign Up')
@section('content')

<section class="register-section">
    <div class="register-wrapper">
        <h1>Lehrer Registration</h1>
        <form action="{{route('register-teacher')}}" enctype="multipart/form-data" method="post">
            @csrf

            <div class="inputarea">
                <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
                <input type="text" id="firstname" name="firstname" value="{{old('firstname')}}" placeholder="Vorname">
            </div>

            <div class="inputarea">
                <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
                <input type="text" id="lastname" name="lastname" value="{{old('lastname')}}" placeholder="Nachname">
            </div>

            <div class="inputarea">
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email">
            </div>

            <div class="inputarea">
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                <input type="password" id="password" name="password" placeholder="Passwort">
            </div>

            <div class="inputarea">
                <span class="text-danger">@error('certificate') {{$message}} @enderror</span>
                <input type="file" id="certificate" name="certificate" placeholder="certificate">
            </div>


            <button type="submit" name="submit">Sign Up</button>

            <div class="link">
                <a href="/login_teacher">Bereits ein Konto?</a>
                <a href="/register">Als Schüler registrieren?</a>
            </div>

        </form>
    </div>
</section>

@endsection
