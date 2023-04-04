@extends('layouts.master_teacher')
@section('title', 'Kurse suchen')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title>Choose Subject</title>
	<style>
			form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		label {
			font-size: 18px;
			margin-bottom: 10px;
		}
		select {
			font-size: 16px;
			padding: 8px;
			border: none;
			border-radius: 4px;
			box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
			margin-bottom: 20px;
		}
		button {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		button:hover {
			background-color: #3e8e41;
		}
		.selected-options {
			font-size: 16px;
			margin-top: 20px;
			padding: 10px;
			background-color: #f2f2f2;
			border-radius: 4px;
			box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
			text-align: center;
			display: none;
		}
		.selected-options span {
			margin-right: 5px;
			font-weight: bold;
		}
	</style>
</head>
<body>
<form>
		<label for="subjects">Ausgewählte Fächer:</label>
		<select id="subjects" name="subjects[]" multiple >
			<option value="math">Mathematik</option>
			<option value="english">Englisch</option>
			<option value="german">Deutsch</option>
			<option value="science">Naturwissenschaften</option>
			<option value="french">Französisch</option>

		</select>
		<button type="submit">Submit</button>
		<div class="selected-options"></div>
	</form>



   

<div class="timetable-section">


<div class="timetable">
    <div class="header">
        <div class="time"></div>
        <div class="time">Zeit</div>
        <?php
          $currentDate = strtotime("next Monday");
          for ($i = 0; $i < 7; $i++) {
              echo '<div class="time">' . date('l d.m.', $currentDate) . '</div>';
              $currentDate = strtotime("+1 day", $currentDate);
         }
        ?>
    </div>

    <div class="row">
        <div class="time">9:00 - 10:00</div>
        <div class="time"></div>
        <?php
          $date = date("d-m-Y", strtotime("next Monday"));
          $time = "9:00 - 10:00";
          for ($i = 0; $i < 7; $i++) {
              $datetime = $date . " " . $time;
              echo '<div class="cell" data-date="' . $datetime . '">';
              echo '<div class="cell-time">' . '</div>';
              echo '</div>';
              $date = date("d-m-Y", strtotime("+1 day", strtotime($date)));
          }
          for ($i = 0; $i < 6; $i++) {
              echo '<div class="cell" data-date="">';
              echo '<div class="cell-time"></div>';
              echo '</div>';
          }
        ?>
    </div>

    <div class="row">
        <div class="time">10:00 - 11:00</div>
        <div class="time"></div>
        <?php
        $date = date("d-m-Y", strtotime("next Monday"));
        $time = "10:00 - 11:00";
        for ($i = 0; $i < 7; $i++) {
          $datetime = $date . " " . $time;
            echo '<div class="cell" data-date="' . $datetime . '">';
            echo '<div class="cell-time">' . '</div>';
            echo '</div>';
            $date = date("d-m-Y", strtotime("+1 day", strtotime($date)));
        }
        for ($i = 0; $i < 6; $i++) {
            echo '<div class="cell" data-date="">';
            echo '<div class="cell-time"></div>';
            echo '</div>';
          }
          ?>
    </div>

    <div class="row">
        <div class="cell-time">11:00 - 12:00</div>
        <div class="time"></div>
        <?php
        $date = date("d-m-Y", strtotime("next Monday"));
        $time = "11:00 - 12:00";
        for ($i = 0; $i < 7; $i++) {
            $datetime = $date . " " . $time;
            echo '<div class="cell" data-date="' . $datetime . '">';
            echo '<div class="cell-time">' . '</div>';
            echo '</div>';
            $date = date("d-m-Y", strtotime("+1 day", strtotime($date)));
        }
        for ($i = 0; $i < 6; $i++) {
            echo '<div class="cell" data-date="">';
            echo '<div class="cell-time"></div>';
            echo '</div>';
        }
        ?>
    </div>

    <div class="row">
        <div class="cell-time">12:00 - 13:00</div>
        <div class="time"></div>
        <?php
        $date = date("d-m-Y", strtotime("next Monday"));
        $time = "12:00 - 13:00";
        for ($i = 0; $i < 7; $i++) {
            $datetime = $date . " " . $time;
            echo '<div class="cell" data-date="' . $datetime . '">';
            echo '<div class="cell-time">' . '</div>';
            echo '</div>';
            $date = date("d-m-Y", strtotime("+1 day", strtotime($date)));
        }
        for ($i = 0; $i < 6; $i++) {
            echo '<div class="cell" data-date="">';
            echo '<div class="cell-time"></div>';
            echo '</div>';
        }
        ?>
    </div>

    <div class="row">
        <div class="cell-time">13:00pm - 14:00pm</div>
        <div class="time"></div>
        <?php
        $date = date("d-m-Y", strtotime("next Monday"));
        $time = "13:00am - 14:00am";
        for ($i = 0; $i < 7; $i++) {
            $datetime = $date . " " . $time;
            echo '<div class="cell" data-date="' . $datetime . '">';
            echo '<div class="cell-time">' . '</div>';
            echo '</div>';
            $date = date("d-m-Y", strtotime("+1 day", strtotime($date)));
        }
        for ($i = 0; $i < 6; $i++) {
            echo '<div class="cell" data-date="">';
            echo '<div class="cell-time"></div>';
            echo '</div>';
        }
        ?>
    </div>

    <div class="row">
        <div class="cell-time">14:00 - 15:00</div>
        <div class="time"></div>
        <?php
        $date = date("d-m-Y", strtotime("next Monday"));
        $time = "14:00 - 15:00am";
        for ($i = 0; $i < 7; $i++) {
            $datetime = $date . " " . $time;
            echo '<div class="cell" data-date="' . $datetime . '">';
            echo '<div class="cell-time">' . '</div>';
            echo '</div>';
            $date = date("d-m-Y", strtotime("+1 day", strtotime($date)));
        }
        for ($i = 0; $i < 6; $i++) {
            echo '<div class="cell" data-date="">';
            echo '<div class="cell-time"></div>';
            echo '</div>';
        }
        ?>
    </div>

    <div class="row">
        <div class="cell-time">15:00 - 16:00</div>
        <div class="time"></div>
        <?php
        $date = date("d-m-Y", strtotime("next Monday"));
        $time = "15:00 - 16:00";
        for ($i = 0; $i < 7; $i++) {
            $datetime = $date . " " . $time;
            echo '<div class="cell" data-date="' . $datetime . '">';
            echo '<div class="cell-time">' . '</div>';
            echo '</div>';
            $date = date("d-m-Y", strtotime("+1 day", strtotime($date)));
        }
        for ($i = 0; $i < 6; $i++) {
            echo '<div class="cell" data-date="">';
            echo '<div class="cell-time"></div>';
            echo '</div>';
        }
        ?>
    </div>


    <div class="row">
        <div class="cell-time">16:00 - 17:00</div>
        <div class="time"></div>
        <?php
        $date = date("d-m-Y", strtotime("next Monday"));
        $time = "16:00 - 17:00";
        for ($i = 0; $i < 7; $i++) {
            $datetime = $date . " " . $time;
            echo '<div class="cell" data-date="' . $datetime . '">';
            echo '<div class="cell-time">' . '</div>';
            echo '</div>';
            $date = date("d-m-Y", strtotime("+1 day", strtotime($date)));
        }
        for ($i = 0; $i < 6; $i++) {
            echo '<div class="cell" data-date="">';
            echo '<div class="cell-time"></div>';
            echo '</div>';
        }
        ?>
    </div>

    <div class="row">
        <div class="cell-time">17:00 - 18:00</div>
        <div class="time"></div>
        <?php
        $date = date("d-m-Y", strtotime("next Monday"));
        $time = "17:00 - 18:00";
        for ($i = 0; $i < 7; $i++) {
            $datetime = $date . " " . $time;
            echo '<div class="cell" data-date="' . $datetime . '">';
            echo '<div class="cell-time">' . '</div>';
            echo '</div>';
            $date = date("d-m-Y", strtotime("+1 day", strtotime($date)));
        }
        for ($i = 0; $i < 6; $i++) {
            echo '<div class="cell" data-date="">';
            echo '<div class="cell-time"></div>';
            echo '</div>';
        }
        ?>
    </div>

    <div class="row">
        <div class="cell-time">18:00 - 19:00</div>
        <div class="time"></div>
        <?php
        $date = date("d-m-Y", strtotime("next Monday"));
        $time = "18:00 - 19:00";
        for ($i = 0; $i < 7; $i++) {
            $datetime = $date . " " . $time;
            echo '<div class="cell" data-date="' . $datetime . '">';
            echo '<div class="cell-time">' . '</div>';
            echo '</div>';
            $date = date("d-m-Y", strtotime("+1 day", strtotime($date)));
        }
        for ($i = 0; $i < 6; $i++) {
            echo '<div class="cell" data-date="">';
            echo '<div class="cell-time"></div>';
            echo '</div>';
        }
        ?>
    </div>

</div>

</div>


<script>
// get all cell elements
const cells = document.querySelectorAll('.cell');
// add click event listener to each cell
cells.forEach(cell => {
  cell.addEventListener('click', function() {
    const date = this.getAttribute('data-date');
    

    Swal.fire({
  title: 'Do you want to save the changes?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: 'Save',
  denyButtonText: `Don't save`,
}).then((result) => {

  if (result.isConfirmed) {

    window.location.href = "/create_courses/save/"+ date.toString();
    cell.classList.add('clicked');
      localStorage.setItem(cell.dataset.date, 'clicked');

    
  } 
  else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
  }

  

})

  });

  if (localStorage.getItem(cell.dataset.date) === 'clicked') {
      cell.classList.add('clicked');
    }
});




		const subjectsSelect = document.getElementById("subjects");
		const selectedOptionsDiv = document.querySelector(".selected-options");

		subjectsSelect.addEventListener("change", () => {
			const selectedOptions = Array.from(subjectsSelect.selectedOptions, option => option.text);
			selectedOptionsDiv.innerHTML = `Selected options: <span>${selectedOptions.join("</span>, <span>")}</span>`;
			selectedOptionsDiv.style.display = selectedOptions.length > 0 ? "block" : "none";
		});
	</script>

</body>
</html>



@endsection