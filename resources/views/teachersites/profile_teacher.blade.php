@extends('layouts.master_teacher')
@section('title', 'Profil Lehrer')
@section('content')

<style>





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

th, td {
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

a:hover{
	cursor: pointer;
}


footer {
	background-color: #333;
	color: #fff;
	padding: 20px;
	text-align: center;

}

    
</style>
<body>
	<header>
		<h1>Profilseite</h1>
	</header>
	<main>
		<section>
			<h2>Persöhnliche Informationen</h2> <br>
			
			<p><strong>Vorname:</strong> {{$data->firstname}}</p>
			<p><strong>Name:</strong> {{$data->lastname}}</p>
			<p><strong>Email:</strong> {{$data->email}}</p> 
		
			 
            <div class="logout-link">
                <a href="logout">Logout</a>
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

					</tr>
				</thead>
				<tbody>
					@foreach ($courses as $course)
					<tr>
						<td>{{$course->subject}} <a style="color: #00B0FF" id="edit">Bearbeiten</a></td> 
						<td>{{$course->date}}<a style="color: #00B0FF" id="edit">Bearbeiten</a></td>
						<td>{{$course->time}}<a style="color: #00B0FF" id="edit">Bearbeiten</a></td>
					</tr>
					@endforeach
                  
			</table>
		</section>
	</main> <br> <br>
	
</body>




</html>



@endsection