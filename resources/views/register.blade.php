<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KamUni</title>
</head>

<body>
    <section class="register-section">
        <div class="register-container">
            <div class="register-info">
                

            </div>
            <div class="register-formular">
                <div class="form">
                    <form action="{{route('register-user')}}" method="post">
                      @csrf
                        <h1>Registrieren</h1>

                        <div class="inputarea">
                            <input type="text" id="firstname" name="firstname" value="{{old('firstname')}}" placeholder="Vorname">
                            <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
                        </div>

                        <div class="inputarea">
                            <input type="text" id="lastname" name="lastname" value="{{old('lastname')}}" placeholder="Nachname">
                            <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
                        </div>

                        <div class="inputarea">
                            <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>

                        <div class="inputarea">
                            <input type="password" id="password" name="password" placeholder="Passwort">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>

                        <button type="submit" name="submit">Sign In</button>


                        <div class="link">
                        <a href="/login">Bereits ein Konto?</a>
                        <a href="">Als Lehrer registrieren?</a>
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>
    </section>




<style>
* {
    padding: 0;
    font-family: "Poppins", sans-serif;
    margin: 0;
    
}

body{
    background-color: #A8E08E;
}
.register-section {
    
    padding: 30px;
    border: 5px;
    min-height: 100vh;
    min-width: 100vh;
    
}

.register-container {
    display: flex;
    width: 100%;
    flex-direction: row;
    min-height: 100vh;
    min-width: 100vh;
}

.register-info {
    width: 55%;
    border-right: 2px solid;
}

.register-info h1 {
    font-size: 30px;
    color: #3E9EEB;
}

.register-info h3 {
    color: #FF595B;
    margin: 20px 0 9px 0;
}

.register-info a {
    text-decoration: none;
    color: #3E9EEB;
}

.register-info a:hover {
    text-decoration: underline;
}


.register-formular {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 55%;
}

form {
    display: flex;
    flex-direction: column;
    margin: 15px;
}

h1 {
    display: flex;
    justify-content: center;
    align-items: center;
    color: black;
    padding-bottom: 20px;
}

.inputarea{
    position: relative;
    margin: 15px 0;
}

div label {
    transition: .2s all ease-in;
    color: #444748;
    display: block;
}

div input {
    height: 35px;
    margin-bottom: 11px;
    outline: none;
    border: none;
    width: 100%;
}
    
div input::placeholder{
    font-size: 15px;
    

}

button {
    width: 250px;
    height: 45px;
    border: none;
    border-radius: 50px;
    margin: 10px 5px;
    padding: 9px;
    color: white;
    background-color: #006ed5;
    cursor: pointer;
}

button:hover {
    transition: .1s;
    background: linear-gradient(to right, #0acffe 0%, #495aff 100%);
    
}

span{
    color: red;
    font-size: 15px;
    margin-right: 20px;
}

.link{
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
   margin-top: 17px;
}

.link a{
    text-decoration: none;
    color: grey;
}

.link a:hover{
    text-decoration: underline;
    color: grey;
}

</style>

</body>

</html>
