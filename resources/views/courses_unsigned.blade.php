@extends('layouts.master_unsigned')
@section('title', 'Kurse suchen')
@section('content')

<div class="box-wrapper">

<div class="container-boxes">

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



</div>

</div>


@endsection

@section('script')
<script>
    $('.box').on("click", function () {
        Swal.fire({
            icon: 'error',
            title: 'Noch nicht angemeldet',
            text: 'Sie müssen sich zuerst Anmelden!',
            footer: '<a href="/login">Anmelden?</a>',
        })
    });

</script>
@endsection
