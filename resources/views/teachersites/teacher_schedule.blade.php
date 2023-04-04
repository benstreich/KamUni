@extends('layouts.master_teacher')
@section('title', 'Stundenplan')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">

const date = new Date();

let day = date.getDate();
let month = date.getMonth() + 1;
let year = date.getFullYear();

// This arrangement can be altered based on how we want the date's format to appear.
let currentDate = `${day}-${month}-${year}`;

</script>

<div class="buttonnextweek">

    <div id="btn-next-week">
        <svg xmlns="http://www.w3.org/2000/svg" width="82" height="68" viewBox="0 0 82 68" id="btn-next-week">
            <g id="Rechteck_12" data-name="Rechteck 12" fill="#c1d2ba" stroke="#707070" stroke-width="1">
                <rect width="82" height="68" stroke="none" />
                <rect x="0.5" y="0.5" width="81" height="67" fill="none" />
            </g>
            <g id="Komponente_61_1" data-name="Komponente 61 – 1" transform="translate(20 4)">
                <g id="Polygon_2" data-name="Polygon 2" transform="translate(54) rotate(90)" fill="#ece9e2">
                    <path
                        d="M 61.13642883300781 53.5 L 0.8635731935501099 53.5 L 31.00000190734863 1.004285454750061 L 61.13642883300781 53.5 Z"
                        stroke="none" />
                    <path
                        d="M 31.00000190734863 2.008563995361328 L 1.727138519287109 53 L 60.27286529541016 53 L 31.00000190734863 2.008563995361328 M 31.00000190734863 0 L 62 54 L 3.814697265625e-06 54 L 31.00000190734863 0 Z"
                        stroke="none" fill="#707070" />
                </g>
            </g>
        </svg>
    </div>

</div>



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

    window.location.href = "/teacher_schedule/save/"+ date.toString();
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

</script>


@endsection
