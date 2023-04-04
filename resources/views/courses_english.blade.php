@extends('layouts.master_signed')
@section('title', 'Englisch')
@section('content')

<div class="topic-container">
    <div class="img">
        <img src="/images/reading.png" alt="Image 1" class="reading">
        <p>Reading</p>
    </div>
    <div class="img">
        <img src="/images/headphones.png" alt="Image 2" class="listening">
        <p>Listening</p>
    </div>
    <div class="img">
        <img src="images/writing.png" alt="Image 3" class="writing">
        <p>Writing</p>
    </div>
</div>

@endsection
