@extends('layouts.master_signed')
@section('title', 'Tutorauswahl')
@section('content')

<section div class="table-container">
    <main class="table">
        <section class="table__header">
            <h1>Tutorauswahl</h1>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Tutor </th>
                        <th> Nachhilfe Datum </th>
                        <th> Preis </th>
                        <th> Aktion </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td> <img src="images/profil.png" alt="">{{$teacher -> firstname}} {{$teacher -> lastname}}</td>
                        <td> 17 Dec, 2022 </td>
                        <td> <strong> $128.90 </strong></td>
                        <th><a href='' class="action">Auswählen</a></th>
                    </tr>   
                @endforeach
                </tbody>
            </table>
        </section>
    </main>
</section>


@endsection
