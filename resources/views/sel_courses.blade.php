@extends('layouts.master_signed')
@section('title', 'Lehrer auswählen')
@section('content')


<style>.course-card {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 450px;
  width: 350px;
  background-color: white;
  margin: 10px;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
}

.wrapper {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.content {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding: 16px;
}

.title {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 8px;
}

.desc-wrapper {
  flex: 1;
}

.desc {
  font-size: 16px;
  line-height: 24px;
  margin: 0;
}

.price-wrapper {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 16px;
}

.price {
  font-size: 16px;
  margin: 0;
}

.action {
  display: inline-flex;
  align-items: center;
  padding: 8px 12px;
  background-color: #8dbbf2;
  color: white;
  border-radius: 8px;
  font-weight: bold;
  text-decoration: none;
}

.action:hover {
  background-color: #65a9e1;
 
}

.action span {
  margin-left: 8px;
  font-size: 20px;
  line-height: 1;
  position: relative;
  top: 1px;
}
</style>


<section class="selcourses-section">
@foreach ($teachers as $teacher)
<div class="course-card">
 <div class="image"></div>
 <div class="wrapper">
  <div class="content">


      <span class="title">
        
        @php
        $teacherRegistration = $registrations->where('id', $teacher->teacher_id)->first();
        @endphp
        
        <p>{{ $teacherRegistration->firstname }} {{$teacherRegistration->lastname}}</p>


      </span>
   
   
      <div class="desc-wrapper">
    <p class="desc">
     {{$teacherRegistration->desc}}
    </p>  

</div>



    <!-- Display the price for the teacher -->
    <p class="price-wrapper">
        Preis: {{ $teacher->price }} CHF
    </p>


    <a href="{{ route('teacher.details', ['id' => $teacherRegistration->id]) }}" class="action">
      Info
    <span aria-hidden="true">
        →
      </span>
      </a>

   
  </div>
  </div>
</div>
</div>
@endforeach
</section>


@endsection
