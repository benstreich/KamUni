@extends('layouts.master_signed')
@section('title', 'Profil')
@section('content')

<section class="profile-section">
    <div class="title">
        <h1>Mein Profil</h1>
    </div>
    <div class="profile">
        <div class="profile-info">
            <img src="{{$data->image}}">
            <p><strong>Vorname:</strong> {{$data->firstname}}</p>
            <p><strong>Nachname:</strong> {{$data->lastname}}</p>
            <p><strong>Email:</strong> {{$data->email}}</p>
            <div class="logout-link">
                <a href="logout">Logout</a>
            </div>
        </div>
        <div class="profile-update">
            <form action="" enctype="multipart/form-data" method="post">
                @csrf

                <div class="inputarea">
                <input type="file" id="profimg" name="profimg">
                </div>

                <div class="inputarea">
                    <input type="text" id="firstname" name="firstname" value="{{$data->firstname}}"
                        placeholder="Vorname">
                </div>

                <div class="inputarea">
                    <input type="text" id="lastname" name="lastname" value="{{$data->lastname}}" placeholder="Nachname">
                </div>

                <div class="inputarea">
                    <input type="email" id="email" name="email" value="{{$data->email}}" placeholder="Email">
                </div>

                <div class="inputarea">
                    <input type="email" id="email" name="new_email" placeholder="Neue Email">
                </div>

                <button type="submit" name="submit">Bearbeiten</button>

            </form>
        </div>

    </div>

</section>

@endsection
