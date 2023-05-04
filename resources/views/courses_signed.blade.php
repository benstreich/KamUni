@extends('layouts.master_signed')
@section('title', 'Kurse suchen')
@section('content')

<div class="container-boxes">


    <div class="box" id="math-box">
        <img src="/images/math-book.png" alt="Bild 2">
        <div>
            <h2>Mathematik</h2>
        </div>
    </div>
    </a>



    <div class="box" id="german-box">
        <img src="/images/books.png" alt="Bild 2">
        <div>
            <h2>Deutsch</h2>
        </div>
    </div>



    <div class="box" id="french-box" >
        <img src="/images/flag.png" alt="Bild 3">
        <div>
            <h2>Französich</h2>
        </div>
    </div>



    <div class="box" id="science-box">
        <img src="/images/genetic.png" alt="Bild 4">
        <div>
            <h2>Naturwissenschaften</h2>
        </div>
    </div>


    <div class="box" id="english-box">
        <img src="/images/eng.png" alt="Bild 5">
        <div>
            <h2>Englisch</h2>
        </div>
    </div>
    

</div>

<script>

  document.getElementById("math-box").addEventListener("click", function() {
       
        
        window.location.href = "/sel_courses/1";
    });

    document.getElementById("german-box").addEventListener("click", function() {
       
       window.location.href = "/sel_courses/3";
   });

   document.getElementById("french-box").addEventListener("click", function() {
       
       window.location.href = "/sel_courses/5";
   });

   document.getElementById("science-box").addEventListener("click", function() {
       
       window.location.href = "/sel_courses/4";
   });

   document.getElementById("english-box").addEventListener("click", function() {
       
       window.location.href = "/sel_courses/2";
   });


</script>




@endsection