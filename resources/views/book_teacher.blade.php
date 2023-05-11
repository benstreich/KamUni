@extends('layouts.master_signed')
@section('title', 'Teacher Details')
@section('content')

<style>form {
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

form input[type="text"] {
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



<form action="" method="POST">

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
    <input type="text" id="email" name="email" value="{{$data->email}}" required>
  </div>

  <div>
    <label for="telefon">Telefon:</label>
    <input type="text" id="telefon" name="telefon" required>
  </div>

  <!-- Adresse -->
  <div>
    <label for="adresse">Adresse:</label>
    <input type="text" id="adresse" name="adresse" required>
  </div>

  <!-- Professional Information -->
  <h2>Tutor Information</h2> <br> <br>

  <!-- Job Title -->
  <div>
    <label for="company-address">Tutor Vorname:</label>
    <input type="text" id="company-address" name="company-address" value="{{$teacher->firstname}}" readonly>
  </div>

  <div>
    <label for="company-address">Tutor Nachname:</label>
    <input type="text" id="company-address" name="company-address" value="{{$teacher->lastname}}" readonly>
  </div>

  <!-- Company Name -->
  <div>
    <label for="company-name">Fach: </label>
    <input type="text" id="company-name" name="company-name" value="{{$subject->subject}}" readonly>
  </div>

  <div>
    <label for="company-name">Datum: </label>
    <input type="text" id="company-name" name="company-name" value="{{$subject->date}}" readonly>
  </div>

  <div>
    <label for="company-name">Zeit: </label>
    <input type="text" id="company-name" name="company-name" value="{{$subject->time}}" readonly>
  </div>

  <div>
    <label for="company-name">Preis: </label>
    <input type="text" id="company-name" name="company-name" value="{{$subject->price}}" readonly>
  </div>
  




  <!-- Company Address -->
  

  <!-- Submit Button -->
  <button type="submit">Submit</button>

</form> <br><br> <br>

@endsection