@extends('layouts.master_unsigned')
@section('title', 'Sign Up')
@section('content')

<section class="register-section">
    <div class="register-container">
        <div class="register-info">


        </div>
        <div class="register-formular">
            <div class="form">
                <form action="{{route('register-user')}}" method="post">
                    @csrf
                    <h1>Registrieren</h1>

                    <div class="inputarea">
                        <span class="text-danger">@error('firstname'){{$message}}@enderror</span>
                        <input type="text" id="firstname" name="firstname" value="{{old('firstname')}}"
                            placeholder="Vorname">
                    </div>

                    <div class="inputarea">
                        <span class="text-danger">@error('lastname'){{$message}}@enderror</span>
                        <input type="text" id="lastname" name="lastname" value="{{old('lastname')}}"
                            placeholder="Nachname">
                    </div>

                    <div class="inputarea">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                        <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email">
                    </div>

                    <div class="inputarea">
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                        <input type="password" id="password" name="password" placeholder="Passwort">
                    </div>

                    <button type="submit" name="submit">Sign Up</button>


                    <div class="link">
                        <a href="/login">Bereits ein Konto?</a>
                        <a href="register_teacher">Als Lehrer registrieren?</a>
                    </div>


                </form>
            </div>
        </div>
    </div>
</section>

@endsection
