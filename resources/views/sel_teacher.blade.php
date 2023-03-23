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
                    <tr>
                        <td> <img src="images/profil.png" alt="">Testname Test</td>
                        <td> 17 Dec, 2022 </td>
                        <td> <strong> $128.90 </strong></td>
                        <th><a href='' class="action">Auswählen</a></th>
                    </tr>
                    <tr>
                        <td><img src="images/profil.png" alt="">Testname Test</td>
                        <td> 27 Aug, 2023 </td>
                        <td> <strong>$5350.50</strong> </td>
                        <th><a href='' class="action">Auswählen</a></th>
                    </tr>
                    <tr>
                        <td><img src="images/profil.png" alt="">Testname Test</td>
                        <td> 14 Mar, 2023 </td>
                        <td> <strong>$210.40</strong> </td>
                        <th><a href='' class="action">Auswählen</a></th>
                    </tr>
                    <tr>
                        <td><img src="images/profil.png" alt="">Testname Test</td>
                        <td> 14 Mar, 2023 </td>
                        <td> <strong>$210.40</strong> </td>
                        <th><a href='' class="action">Auswählen</a></th>
                    </tr>
                    <tr>
                        <td><img src="images/profil.png" alt="">Testname Test</td>
                        <td> 14 Mar, 2023 </td>
                        <td> <strong>$210.40</strong> </td>
                        <th><a href='' class="action">Auswählen</a></th>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</section>


@endsection
