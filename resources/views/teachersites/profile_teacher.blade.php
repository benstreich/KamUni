@extends('layouts.master_teacher')
@section('title', 'Profil Lehrer')
@section('content')

<style>
    .edit-button {
        background-color: #459AC0;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
        float: right;
        
    }
    .save-button {
        background-color: #459AC0;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
        float: right;
    }

    .cancel-button {
        background-color: #459AC0;
        /* Green */
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
        float: right;
    }

    .subject-dropdown {
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        float: left;

    }




    main {
        margin: 20px;
    }

    section {
        margin-bottom: 20px;
    }

    h2 {
        margin-top: 0;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #333;
        color: #fff;
    }

    a {
        float: right;
        color: #fff;
        padding: 10px;
        text-decoration: none;
        border-radius: 5px;
    }

    a:hover {
        cursor: pointer;
    }

</style>
<main>
    <section class="profile-section">
        <div class="title">
            <h1>Mein Profil</h1>
        </div>
        <div class="profile">
            <div class="profile-update">
                <form action="" enctype="multipart/form-data" method="post">
                @csrf

                  
                   
                    @if ($data)
                    <div class="inputarea">
                        <h5>Vorname</h5>
                        <input type="text" id="firstname" name="firstname" value="{{ $data->firstname }}"
                            placeholder="Vorname">
                    </div>
                    @endif
                    @if ($data)
                    <div class="inputarea">
                        <h5>Nachname</h5>
                        <input type="text" id="lastname" name="lastname" value="{{$data->lastname}}"
                            placeholder="Nachname">
                    </div>
                    @endif
                    @if ($data)
                    <div class="inputarea">
                        <h5>Email</h5>
                        <input type="email" id="email" name="email" value="{{$data->email}}" placeholder="Email">
                    </div>
                    @endif
                    <div class="inputarea">
                        <h5>Neue Email</h5>
                        <input type="email" id="email" name="new_email" placeholder="Neue Email">
                    </div>


                    <div class="inputarea">
                        <h5>Beschreibung</h5>
                        <input type="text" id="desc" name="desc" placeholder="Beschreibung" value="{{$data->desc}}">         
                    </div>

                    <button type="submit" name="submit">Profil Bearbeiten</button>
                    <div class="logout-link">
                        <a href="logout">Logout</a>
                    </div>

                </form>
            </div>

        </div>

    </section>

    <section>
        <h2>Bei ihnen buchbare Kurse</h2> <br>
        <table>
            <thead>
                <tr>
                    <th>Fach</th>
                    <th>Datum</th>
                    <th>Zeit</th>
                    <th>Preis / Stunde</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)

                <tr>
                    <td>
                        <!-- {{$course->subject}} <a style="color: #00B0FF" id="edit">Bearbeiten</a> -->

                        <div class="subject">
                            <span class="subject-text">{{$course->subject}}</span>
                            <div class="edit-form" style="display:none;">
                                <select class="subject-dropdown">
                                    <option value="Mathematik">Mathematik</option>
                                    <option value="Englisch">Englisch</option>
                                    <option value="Deutsch">Deutsch</option>
                                    <option value="Naturwissenschaft">Naturwissenschaft</option>
                                    <option value="Französisch">Französisch</option>
                                </select>
                            </div>
                        </div>




                    <td>



                        <div class="subject">
                            <span class="subject-text">{{$course->date}}</span>
                            <div class="edit-form" style="display:none;">
                                <input type="date" id="date" name="date" class="subject-dropdown">

                            </div>
                        </div>


                    </td>
                    <td>

                        <div class="subject">
                            <span class="subject-text">{{$course->time}}</span>
                            </div>
                        </div>



                    </td>

                    <td>
                        <div class="subject">
                            <div id="price-display" class="subject-text">{{$course->price}} </div>
                            <form action="/profile_teacher_delete" method="post">
                                @csrf
                                 <input type="hidden" name="course_id" value="{{$course->id}}">
                                 <button type="submit" class="edit-button">Löschen</button>
                            </form>
                        </div>

                    </td>
                </tr>
                @endforeach

        </table>
    </section>
</main> <br> <br>



<script>



</script>



@endsection
