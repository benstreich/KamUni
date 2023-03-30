@extends('layouts.master_unsigned')
@section('title', 'Sign Up')
@section('content')

<section class="register-section">
        <div class="register-container">
            <div class="register-info">


            </div>
            <div class="register-formular">
                <div class="form">
                    <form action="{{route('register-teacher')}}" method="post">
                        @csrf
                        <h1>Lehrer Registration</h1>

                        <div class="inputarea">
                            <input type="text" id="firstname" name="firstname" value="{{old('firstname')}}"
                                placeholder="Vorname">
                            <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
                        </div>

                        <div class="inputarea">
                            <input type="text" id="lastname" name="lastname" value="{{old('lastname')}}"
                                placeholder="Nachname">
                            <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
                        </div>

                        <div class="inputarea">
                            <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>

                        <div class="inputarea">
                            <input type="password" id="password" name="password" placeholder="Passwort">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>

                        <div class="inputarea">
                            <input type="file" id="certificate" name="certificate" placeholder="certificate">
                            <span class="text-danger">@error('certificate') {{$message}} @enderror</span>
                        </div>


                        <button type="submit" name="submit">Sign Up</button>

                        <div class="link">
                        <a href="/login_teacher">Bereits ein Konto?</a>
                        <a href="register">Als Schüler registrieren?</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection