@extends('layouts.master_signed')
@section('title', 'Kurse suchen')
@section('content')

<div class="container-boxes">

    @auth
    <div class="box" id="click">
        <img src="/images/math-book.png" alt="Bild 2">
        <div>
            <h2>Mathematik</h2>
        </div>
    </div>
    </a>



    <div class="box" onclick="window.location.href='/courses_german'">
        <img src="/images/books.png" alt="Bild 2">
        <div>
            <h2>Deutsch</h2>
        </div>
    </div>



    <div class="box">
        <img src="/images/flag.png" alt="Bild 3">
        <div>
            <h2>Französich</h2>
        </div>
    </div>



    <div class="box">
        <img src="/images/genetic.png" alt="Bild 4">
        <div>
            <h2>Naturwissenschaften</h2>
        </div>
    </div>


    <div class="box">
        <img src="/images/eng.png" alt="Bild 5">
        <div>
            <h2>Englisch</h2>
        </div>
    </div>
    
    @else
    <div class="box">
        <img src="/images/math-book.png" alt="Bild 2">
        <div>
            <h2>Mathematik</h2>
        </div>
    </div>

    <div class="box">
        <img src="/images/books.png" alt="Bild 2">
        <div>
            <h2>Deutsch</h2>
        </div>
    </div>

    <div class="box">
        <img src="/images/flag.png" alt="Bild 3">
        <div>
            <h2>Französich</h2>
        </div>
    </div>

    <div class="box">
        <img src="/images/genetic.png" alt="Bild 4">
        <div>
            <h2>Naturwissenschaften</h2>
        </div>
    </div>

    <div class="box">
        <img src="/images/eng.png" alt="Bild 5">
        <div>
            <h2>Englisch</h2>
        </div>
    </div>
@endauth


</div>

@endsection