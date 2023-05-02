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
</style>


<form action="{{ route('subjects.store') }}" method="POST" class="fade-in">
    @csrf

 
  
    <label for="subject">Wählen sie ein Fach aus:</label>
    <select id="subject" name="subject">
        <option value="math">Mathematik</option>
        <option value="english">Englisch</option>
        <option value="german">Deutsch</option>
        <option value="science">Naturwissenschaften</option>
        <option value="french">Französisch</option>
    </select>

    <br>

    <div class="form-group">
        <label for="date" class="form-label">Datum:</label>
        <input type="date" id="date" name="date" class="form-control">
    </div>

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

    <input type="hidden" name="teacher_id" id="teacher_id" value="{{ $teacher_id }}"> 

    <button type="submit">Submit</button>


    <br> <br> <br> <br>
</form>
@endsection