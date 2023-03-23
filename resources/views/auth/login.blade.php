@extends('layouts.master_unsigned')
@section('title', 'Sign In')
@section('content')

<section class="login-section">
    <div class="login-container">
        <div class="login-info">

        </div>
        <div class="login-formular">
            <div class="form">
                <div class="alert-danger">{{Session::get('fail')}}</div>
                <form class="loginForm" action="{{route('login-user')}}" method="post">
                    @csrf
                    <h1>Anmelden</h1>

                    <div class="inputarea">
                        <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>

                    <div class="inputarea">
                        <input type="password" id="password" name="password" value="" placeholder="Passwort">
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>

                    <button type="submit" name="submit">Sign In</button>

                    <div class="link">
                        <a href="/register">Noch kein Konto?</a>
                        <a href="login_teacher">Als Lehrer einloggen?</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

@endsection
