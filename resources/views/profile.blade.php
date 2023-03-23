@extends('layouts.master_signed')
@section('title', 'Profil')
@section('content')

<div class="profile-section">
    <div class="title">
        <h1>Mein Profil</h1>
    </div>
    <div class="profile-container">
        <div class="profile-info">
            <img src="/images/pb.svg">
            <p><span></span></p>
            <p>{{$data->firstname}} {{$data->lastname}}</p>
            <p>{{$data->email}}</p>
            <div class="logout-link">
                <p><a href="logout">Logout</a></p>
            </div>
        </div>
    </div>
</div>

@endsection
