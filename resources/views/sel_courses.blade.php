@extends('layouts.master_unsigned')
@section('title', 'Kurs auswählen')
@section('content')


<section class="selcourses-section">
@foreach ($teachers as $teacher)
<div class="course-card">
 <div class="image"></div>
  <div class="content">


      <span class="title">
        <p>{{$teacher->firstname}} {{$teacher->lastname}} </p>
        
      </span>


   
    <p class="desc">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
      dolores, possimus pariatur animi temporibus nesciunt praesentium 
    </p>


    <a href="#" class="action">
      Buchen
      <span aria-hidden="true">
        →
      </span>
    </a>
  </div>
</div>
@endforeach
</section>


@endsection

