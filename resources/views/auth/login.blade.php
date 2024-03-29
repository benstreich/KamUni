@extends('layouts.master_unsigned')
@section('title', 'Sign In')
@section('content')

<section class="login-section">
    <div class="login-wrapper">
        <h1>Anmelden</h1>
        <div class="alert-danger">{{Session::get('fail')}}</div>
        <form class="loginForm" action="{{route('login-user')}}" method="post">
            @csrf
            <div class="inputarea">
                <span class="text-danger" role="alert">@error('email'){{$message}}@enderror</span>
                <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email">
            </div>

            <div class="inputarea">
                <span class="text-danger">@error('password'){{$message}}@enderror</span>
                <input type="password" id="password" name="password" placeholder="Passwort">
                <a href="{{ route('forget.password.get') }}">Passwort vergessen</a>
            </div>

            <button type="submit" name="submit">Sign In</button>
            <div class="link">
                <a href="/register">Noch kein Konto?</a>
                <a href="/login_teacher">Als Lehrer einloggen?</a>
            </div>
        </form>
    </div>
</section>

@endsection
