@extends('layouts.master_teacher')
@section('title', 'Kurse suchen')
@section('content')

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
        text-align: center;
    }

    select,
    input[type=date] {
        font-size: 16px;
        padding: 8px;
        border: none;
        border-radius: 4px;
        box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
        margin-bottom: 20px;
        width: 300px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 300px;
        margin-top: 20px;
    }

    button:hover {
        background-color: #3e8e41;
    }



    .form-group {
        margin-bottom: 1rem;
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-control:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .form-control::placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control:disabled,
    .form-control[readonly] {
        background-color: #e9ecef;
        opacity: 1;
    }

    .form-control.is-invalid,
    .form-control.is-valid {
        padding-right: calc(0.75rem + 1.5em);
        background-repeat: no-repeat;
        background-position: center right calc(0.375em + 2px);
        background-size: calc(0.75em + 1.5px) calc(0.75em + 1.5px);
    }

    .fade-in {
    opacity: 0;
    animation-name: fade-in;
    animation-duration: 1s;
    animation-fill-mode: forwards;
}

@keyframes fade-in {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}


.price_range{

    display: block;
    height: calc(1.5em + 0.75rem + 2px);
    width: 300px;

}
</style>

<body>

<script>



</script>

<form action="{{ route('subjects.store') }}" method="POST" class="fade-in">
    @csrf

 
  
    <label for="subject">Wählen sie ein Fach aus:</label>
    <select id="subject" name="subject">
        <option value="Mathematik">Mathematik</option>
        <option value="Englisch">Englisch</option>
        <option value="Deutsch">Deutsch</option>
        <option value="Naturwissenschaften">Naturwissenschaften</option>
        <option value="Französisch">Französisch</option>
    </select>


    <br>

        <label for="date" class="form-label">Datum:</label> 
        <input type="date" id="date" name="date" class="form-control">

    <br>

    <label for="time">Zeit:</label>
    <select id="time" name="time">
        <option value="8:00 - 9:00">8:00 - 9:00</option>
        <option value="9:00 - 10:00">9:00 - 10:00</option>
        <option value="10:00 - 11:00">10:00 - 11:00</option>
        <option value="11:00 - 12:00">11:00 - 12:00</option>
        <option value="12:00 - 13:00">12:00 - 13:00</option>
        <option value="13:00 - 14:00">13:00 - 14:00</option>
        <option value="14:00 - 15:00">14:00 - 15:00</option>
        <option value="16:00 - 17:00">16:00 - 17:00</option>
        <option value="17:00 - 18:00">17:00 - 18:00</option>
        <option value="18:00 - 19:00">18:00 - 19:00</option>
        <option value="19:00 - 20:00">19:00 - 20:00</option>
        <option value="20:00 - 21:00">20:00 - 21:00</option>
        <option value="21:00 - 22:00">21:00 - 22:00</option>
    </select>

    <br>


    <label for="price" class="form-label">Preis / Stunde: <div id="price-display">170 CHF</div> </label>
    <input type="range" id="price" name="price" class="price_range"  min="40" max="300" step="1">


    <input type="hidden" name="subjectid" id="subjectid">

    <input type="hidden" name="teacher_id" id="teacher_id" value="{{ $teacher_id }}"> 

    <button type="submit">Submit</button>


    <br> <br> <br> <br>
</form>

<script>


let rangeInput = document.getElementById("price");
let priceDisplay = document.getElementById("price-display");

rangeInput.addEventListener("input", function() {
  let price = this.value + ' CHF';
  priceDisplay.textContent = price;
});

var subjectId;


let subjectselect = document.getElementById('subject').addEventListener('change', subjectchange);

function subjectchange(){

    let subject = document.getElementById("subject").value;


if (subject === "Mathematik") {
    console.log(subject); //test
    subjectId = 1; 
}  if (subject === "Englisch") {
    console.log(subject); //test
    subjectId = 2;
}  if (subject === "Deutsch") {
    subjectId = 3;
}  if (subject === "Naturwissenschaften") {
    subjectId = 4;
}  if (subject === "Französisch") {
    subjectId = 5;
}

document.getElementById('subjectid').value = subjectId;

}


</script>

</body>
@endsection