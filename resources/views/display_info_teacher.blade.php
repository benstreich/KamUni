@extends('layouts.master_unsigned')
@section('title', 'Teacher Details')
@section('content')

<style>
    .teacher-details {
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    padding: 20px;
    margin: 20px 0;
}

.teacher-details h1 {
    font-size: 32px;
    margin: 0 0 10px 0;
}

.teacher-details p {
    font-size: 18px;
    margin: 0 0 5px 0;
}

</style>


<div class="teacher-details">

    <h1>{{ $teacher->firstname }} {{ $teacher->lastname }}</h1>
    <p>{{ $teacher->desc }}</p>

    <p>Subject: {{ $subject->subject }}</p>
    
    <p>Price: {{ $subject->price }} CHF</p>

         <h3>Daten:</h3>
         <h4>{{$subject->date}}</h4>
         <h3>Zeit:</h3>
         <h4>{{$subject->time}}</h4>



    <!-- Add any other details about the teacher here -->
</div>




@endsection
