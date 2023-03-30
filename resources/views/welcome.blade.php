@extends('layouts.master_unsigned')
@section('title', 'KamUni')
@section('content')

<div class="contentclass">
    <div class="camellot">
        <img src="svg/xyz.svg">
    </div>
</div>



<section class="features-section">
    <h1>Unsere Features</h1>
    <p>Unsere Lernplattform stellt dir besondere Funktionen zur Verfügung, die dir 
        ein einzigartiges Lernerlebnis bietet.</p>
    <div class="card-container">
        <div class="card">
            <div class="card-img">
                <img src="svg/diploma.svg">
            </div>
            <div class="description">
                <h1>Diplomkontrolle</h1>
                <p>Wir stellen sicher, dass alle unsere Tutoren einer Diplomkontrolle unterzogen werden, 
                    bevor sie für unsere Plattform zugelassen werden.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">
                <img src="svg/payment.svg">
            </div>
            <div class="description">
                <h1>Bezahlung</h1>
                <p>Du kannst aus verschiedenen Bezahlungsmethoden diejenige auswählen, die am besten zu dir passt.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-img">
                <img src="svg/security.svg">
            </div>
            <div class="description">
                <h1>Sicherheit</h1>
                <p>Bei uns steht Sicherheit an erster Stelle und garantieren, dass deine Daten bei uns sicher aufbewahrt werden.</p>
            </div>
        </div>
    </div>
</section>


<section class="end-section">
    <div class="end">
        <h1>Registriere dich jetzt auf unserer Lernplattform und erreiche deine Lernziele schneller und effektiver.</h1>
        <a href="/register"><button class="start-now">Jetzt kostenlos starten</button> </a>
    </div>
</section>

@endsection
