@extends('layouts.master_teacher')
@section('title', 'Profil Lehrer')
@section('content')

<style>



.edit-button {
  background-color: #459AC0; 
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
	float: right;

}

.save-button{
	background-color: #459AC0; 
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
	float: right;
}

.cancel-button{
	background-color: #459AC0; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
	float: right;
}

.subject-dropdown{
	display: inline-block;
	font-size: 16px;
	cursor: pointer;
	border-radius: 5px;
	float: left;

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
						<th>Preis / Stunde</th>

					</tr>
				</thead>
				<tbody>
					@foreach ($courses as $course)
					<tr>
						<td>
							<!-- {{$course->subject}} <a style="color: #00B0FF" id="edit">Bearbeiten</a> -->
						
						<div class="subject">
				<span class="subject-text">{{$course->subject}}</span>
				<button class="edit-button">Bearbeiten</button>
				<div class="edit-form" style="display:none;">
					<select class="subject-dropdown">
						<option value="Mathematik">Mathematik</option>
						<option value="Englisch">Englisch</option>
						<option value="Deutsch">Deutsch</option>
						<option value="Naturwissenschaft">Naturwissenschaft</option>
						<option value="Französisch">Französisch</option>
					</select>
					<button class="save-button">speichern</button>
					<button class="cancel-button">abbrechen</button>
				</div>
			</div>
						
			
			
		
						<td>
						
						
									
			<div class="subject">
				<span class="subject-text">{{$course->date}}</span>
				<button class="edit-button">Bearbeiten</button>
				<div class="edit-form" style="display:none;">
				<input type="date" id="date" name="date" class="subject-dropdown">

					<button class="save-button">speichern</button>
					<button class="cancel-button">abbrechen</button>
				</div>
			</div>
			
						
						
						
						
						
						</td>
						<td>

						<div class="subject">
				<span class="subject-text">{{$course->time}}</span>
				<button class="edit-button">Bearbeiten</button>
				<div class="edit-form" style="display:none;">
					<select class="subject-dropdown">
						<option value="08:00 - 09:00">08:00 - 09:00</option>
						<option value="09:00 - 10:00">09:00 - 10:00</option>
						<option value="10:00 - 11:00">10:00 - 11:00</option>
						<option value="11:00 - 12:00">11:00 - 12:00</option>
						<option value="12:00 - 13:00">12:00 - 13:00</option>
						<option value="13:00 - 14:00">13:00 - 14:00</option>
						<option value="14:00 - 15:00">14:00 - 15:00</option>
						<option value="15:00 - 16:00">15:00 - 16:00</option>
						<option value="16:00 - 17:00">16:00 - 17:00</option>
						<option value="17:00 - 18:00">17:00 - 18:00</option>
						<option value="18:00 - 19:00">18:00 - 19:00</option>
						<option value="19:00 - 20:00">19:00 - 20:00</option>
						<option value="20:00 - 21:00">20:00 - 21:00</option>
						<option value="21:00 - 22:00">21:00 - 22:00</option>

					</select>
					<button class="save-button">speichern</button>
					<button class="cancel-button">abbrechen</button>
				</div>
			</div>
						
						
				
			</td>

						<td>
						<div class="subject">
					<div id="price-display" class="subject-text">{{$course->price}} </div>
				<button class="edit-button"> Bearbeiten</button>
				<div class="edit-form" style="display:none;">
				<input type="range" id="price" name="price" class="price_range"  min="40" max="300" step="1">

					<button class="save-button">speichern</button>
					<button class="cancel-button">abbrechen</button>
				</div>
			</div>

						</td>
					</tr>
					@endforeach
                  
			</table>
		</section>
	</main> <br> <br>
	


<script>
$(document).ready(function() {
	$('.edit-button').click(function() {
		$(this).hide();
		$(this).siblings('.subject-text').hide();
		$(this).siblings('.edit-form').show();
	});

	$('.cancel-button').click(function() {
		$(this).parent('.edit-form').hide();
		$(this).parent('.edit-form').siblings('.subject-text').show();
		$(this).parent('.edit-form').siblings('.edit-button').show();
	});

	$('.save-button').click(function() {
		var subject = $(this).siblings('.subject-dropdown').val();
		$(this).parent('.edit-form').siblings('.subject-text').text(subject);
		$(this).parent('.edit-form').hide();
		$(this).parent('.edit-form').siblings('.subject-text').show();
		$(this).parent('.edit-form').siblings('.edit-button').show();
		// Here you can use AJAX to save the updated subject to the database

	});
});


let rangeInput = document.getElementById("price");
let priceDisplay = document.getElementById("price-display");

rangeInput.addEventListener("input", function() {
  let price = this.value + ' CHF';
  priceDisplay.textContent = price;
});

</script>






</body>




</html>



@endsection