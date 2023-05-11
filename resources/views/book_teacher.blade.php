@extends('layouts.master_signed')
@section('title', 'Teacher Details')
@section('content')

<style>
    form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    form div {
        margin-bottom: 20px;
    }

    form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    form input[type="text"],
    form select {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
    }

    form h2 {
        margin-top: 40px;
        font-size: 24px;
        font-weight: bold;
    }

    form button[type="submit"] {
        display: block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #4285f4;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
    }

    form button[type="submit"]:hover {
        background-color: #3367d6;
    }
</style>


<form action="{{ route('send_email', ['email' => $data->email]) }}" method="POST">
@csrf
  <h2>Deine Informationen</h2> <br> <br>



  <!-- Name -->
  <div>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{$data->lastname}}" required>
  </div>

  <!-- Vorname -->
  <div>
    <label for="vorname">Vorname:</label>
    <input type="text" id="vorname" name="vorname" value="{{$data->firstname}}" required>
  </div>

  <div>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="{{$data->email}}" readonly>
  </div>

  <div>
    <label for="telefon">Telefon:</label>
    <input type="text" id="telefon" name="telefon" >
  </div>

  <div>
    <label for="addresse">Adresse:</label>
    <input type="text" id="addresse" name="addresse" required>
  </div>

  <div>
    <label for="anrede">Anrede:</label>
    <select id="anrede" name="anrede" required>
      <option value="Herr">Herr<option>
      <option value="Frau">Frau<option>
    </select>
  </div>

  <h2>Tutor Information</h2> <br> <br>

  <div>
    <label for="teacher_vorname">Tutor Vorname:</label>
    <input type="text" id="teacher_vorname" name="teacher_vorname" value="{{$teacher->firstname}}" readonly>
  </div>

  <div>
    <label for="teacher_nachname">Tutor Nachname:</label>
    <input type="text" id="teacher_nachname" name="teacher_nachname" value="{{$teacher->lastname}}" readonly>
  </div>

  <div>
    <label for="fach">Fach: </label>
    <input type="text" id="fach" name="fach" value="{{$subject->subject}}" readonly>
  </div>

  <div>
    <label for="datum">Datum: </label>
    <input type="text" id="datum" name="datum" value="{{$subject->date}}" readonly>
  </div>

  <div>
    <label for="zeit">Zeit: </label>
    <input type="text" id="zeit" name="zeit" value="{{$subject->time}}" readonly>
  </div>

  <div>
    <label for="preis">Preis: </label>
    <input type="text" id="preis" name="preis" value="{{$subject->price}}" readonly>
  </div>
  
  <div>
    <label for="preis">Mitteilung: </label>
    <input type="text" id="mitteilung" name="mitteilung" maxlength="100">
  </div>



  <button type="submit">Senden</button>

</form> <br><br> <br>

@endsection
