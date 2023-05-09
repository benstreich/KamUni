@extends('layouts.master_signed')
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


.action {
  display: inline-flex;
  align-items: center;
  padding: 8px 12px;
  background-color: #2563EB;
  color: white;
  border-radius: 8px;
  font-weight: bold;
  text-decoration: none;
}

.action:hover {
  background-color: #65a9e1;
  cursor: pointer;
  
  

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

    a:hover {
        cursor: pointer;
    }
.action span {
  margin-left: 8px;
  font-size: 20px;
  line-height: 1;
  position: relative;
  top: 1px;
}

</style>


<div class="teacher-details">



    <h1>{{ $teacher->firstname }} {{ $teacher->lastname }}</h1>
    <p>{{ $teacher->desc }}</p> <br><br>


   

    <section>
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
                @foreach ($subject as $subjects)

                <tr>
                    <td>

                        <div class="subject">
                            <span class="subject-text">{{$subjects->subject}}</span>
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
                            <span class="subject-text">{{$subjects->date}}</span>
                            <div class="edit-form" style="display:none;">
                                <input type="date" id="date" name="date" class="subject-dropdown">

                            </div>
                        </div>


                    </td>
                    <td>

                        <div class="subject">
                            <span class="subject-text">{{$subjects->time}}</span>
                            </div>
                        </div>



                    </td>

                    <td>
                        <div class="subject">
                            <div id="price-display" class="subject-text">{{$subjects->price}} </div>
                            
                        </div>

                    </td>
                </tr>
                @endforeach

        </table>
    </section>
</main> <br> <br>




         <a href="{{ route('book.teacher') }}" class="action">
        Buchen
      <span aria-hidden="true">
        →
      </span>
    </a>


</div>




@endsection
