<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>KamUni</title>
</head>
<body>
  

<section class="login-section">
    <div class="login-container">
        <div class="login-info">

        </div>
        <div class="login-formular">
            <div class="form">
                <form class="loginForm">
                    <h1>Anmelden</h1>

                    <div>
                        <input type="email" id="email" name="email" value="" placeholder="Email">
                    </div>

                    <div>
                        <input type="text" id="password" name="password" value="" placeholder="Passwort">
                    </div>

                    <button type="submit" name="submit">Sign In</button>

                    <div class="link">
                    <a href="">Noch kein Konto?</a>
                    <a href="">Als Lehrer einloggen?</a>
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
    background-color: rgb(236, 247, 235);
}


.login-container {
    display: flex;
    width: 100%;
    flex-direction: row;
    min-height: 100vh;
    min-width: 100vh;
}

.login-info {
    width: 55%;
    border-right: 2px solid;
}

.login-info h1 {
    font-size: 30px;
    color: #3E9EEB;
}

.login-info h3 {
    color: #FF595B;
    margin: 20px 0 9px 0;
}

.login-info a {
    text-decoration: none;
    color: #3E9EEB;
}

.login-info a:hover {
    text-decoration: underline;
}


.login-formular {
    display: flex;
    justify-content: center;
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


div label {
    transition: .2s all ease-in;
    color: #444748;
    display: block;
}

div input {
    height: 35px;
    width: 250px;
    margin-bottom: 11px;
}
    
div input::placeholder{
    font-size: 15px;
    padding-left: 10px;
}


button {
    width: 250px;
    border: none;
    border-radius: 3px;
    margin: 10px 5px;
    padding: 9px;
    color: white;
    background-color: #006ed5;
    cursor: pointer;
}

button:hover {
    transition: .2s all ease-in;
    background-color: #3E9FFF;
}

.link{
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
}
</style>

</body>
</html>

