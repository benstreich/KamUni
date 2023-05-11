@extends('layouts.master_signed')
@section('title', 'Profil')
@section('content')

<section class="profile-section">
    <div class="title">
        <h1>Mein Profil</h1>
    </div>
    <div class="profile">
        <div class="profile-update">
            <form action="" enctype="multipart/form-data" method="post">
                @csrf

                <div class="inputarea">
                    <h5>Vorname</h5>
                    <input type="text" id="firstname" name="firstname" value="{{$data->firstname}}"
                        placeholder="Vorname">
                </div>

                <div class="inputarea">
                    <h5>Nachname</h5>
                    <input type="text" id="lastname" name="lastname" value="{{$data->lastname}}" placeholder="Nachname">
                </div>

                <div class="inputarea">
                    <h5>Email</h5>
                    <input type="email" id="email" name="email" value="{{$data->email}}" placeholder="Email">
                </div>

                <div class="inputarea">
                    <h5>Neue Email</h5>
                    <input type="email" id="email" name="new_email" placeholder="Neue Email">
                </div>

                <button type="submit" name="submit">Profil Bearbeiten</button>
                <div class="logout-link">
                    <a href="logout">Logout</a>
                </div>

            </form>
        </div>

    </div>

</section>

@endsection
