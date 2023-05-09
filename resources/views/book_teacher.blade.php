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



<form action="/submit-form" method="POST">

  <!-- Name -->
  <div>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
  </div>

  <!-- Vorname -->
  <div>
    <label for="vorname">Vorname:</label>
    <input type="text" id="vorname" name="vorname" required>
  </div>

  <!-- Adresse -->
  <div>
    <label for="adresse">Adresse:</label>
    <input type="text" id="adresse" name="adresse" required>
  </div>

  <!-- Professional Information -->
  <h2>Professional Information</h2>

  <!-- Job Title -->
  <div>
    <label for="job-title">Job Title:</label>
    <input type="text" id="job-title" name="job-title" required>
  </div>

  <!-- Company Name -->
  <div>
    <label for="company-name">Company Name:</label>
    <input type="text" id="company-name" name="company-name" required>
  </div>

  <!-- Company Address -->
  <div>
    <label for="company-address">Company Address:</label>
    <input type="text" id="company-address" name="company-address" required>
  </div>

  <!-- Submit Button -->
  <button type="submit">Submit</button>

</form> <br><br> <br>

@endsection
