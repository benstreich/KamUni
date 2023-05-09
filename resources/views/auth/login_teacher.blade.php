@extends('layouts.master_unsigned')
@section('title', 'Sign In')
@section('content')

@if($message = Session::get('success'))

<div class="alert alert-info">
    {{$message}}
</div>

@endif


<section class="login-section">
    <div class="login-wrapper">
        <div class="alert-danger">{{Session::get('fail')}}</div>
        <form class="loginForm" action="{{ route('login-teacher')}}" method="post">
            @csrf
            <h1>Lehrer Anmeldung</h1>

            <div class="inputarea">
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email">
            </div>

            <div class="inputarea">
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                <input type="password" id="password" name="password" value="" placeholder="Passwort">
                <a href="{{ route('forget.password.teacher.get') }}">Passwort vergessen</a>
            </div>

            <button type="submit" name="submit">Sign In</button>

            <div class="link">
                <a href="/register_teacher">Noch kein Konto?</a>
                <a href="/login">Als Schüler einloggen?</a>
            </div>

        </form>
    </div>
</section>

@endsection
