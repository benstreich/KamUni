<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KamUni</title>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
</head>

<body>

    <header>
        <a href="" class="logo"><img src="/images/logo.png" alt=""></a>
        <ul class="navbar">
            <li><a href="/">Tutoring Uni</a></li>
            <li><a href="courses">Kurse suchen</a></li>
            <li><a href="about_us">Über Uns</a></li>
        </ul>

        <div class="main">
            <a href="/login">Sign In</a>
            <a href="#"><button class="buttonregister">Sign Up</button> </a>
        </div>
    </header>

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
                            <input type="text" id="firstname" name="firstname" value="{{old('firstname')}}"
                                placeholder="Vorname">
                            <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
                        </div>

                        <div class="inputarea">
                            <input type="text" id="lastname" name="lastname" value="{{old('lastname')}}"
                                placeholder="Nachname">
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

                        <button type="submit" name="submit">Sign Up</button>


                        <div class="link">
                            <a href="/login">Bereits ein Konto?</a>
                            <a href="register_teacher">Als Lehrer registrieren?</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-info">
            <div class="about">
                <h2>Über Uns</h2>
                <p>
                    Wir sind ein Team von vier Informatikern, die sich zum Ziel gesetzt haben, eine innovative
                    digitale Lernplattform zu entwickeln, die darauf abzielt, die Lernfähigkeit
                    von Schülern und Studenten zu fördern. Mit unserer Plattform möchten wir den Bildungsbereich
                    revolutionieren und den Lernprozess effektiver und zugänglicher gestalten.
                </p>
                <div class="socials">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="links">
                <h2>Links</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/courses">Kurse suchen</a></li>
                    <li><a href="/about_us">Über Uns</a></li>
                </ul>
            </div>
            <div class="contact">
                <h2>Kontakt</h2>
                <ul>
                    <li>Email einfügen</li>
                    <li>Email einfügen</li>
                    <li>Email einfügen</li>
                    <li>Email einfügen</li>
                </ul>
            </div>
        </div>
    </footer>




    <style>
        * {
            padding: 0;
            font-family: "Poppins", sans-serif;
            margin: 0;
            text-decoration: none;
            list-style: none;

        }

        body {
            background-color: #A8E08E;
        }

        header{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
            padding: 1px 0;

        }

        img{
            width: 200px;
            height:200px;
        }

        .logo{
            display: flex;
            align-items: center;
        }

        .navbar{
            display: flex;
            
            
        }

        .navbar a{
            padding: 5px 0;
            margin: 10px 30px;
            font-size: 18px;
            font-weight: bold;
            color: black;

        }

        .main{
            display: flex;
            align-items: center;
        }

        .main a{
            margin-right: 45px;
            margin-left: 40px;
            font-weight: 500;
            font-size: 18px;
            font-weight: bold;
            color: black;

        }

        .buttonregister{
            width: 120px;
            height: 40px;
            border-radius: 25px; 
            border: 1px solid black ;
            background-color: #00B0FF;
            font-size: 18px;
            cursor: pointer;
        
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

        .inputarea {
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
            margin-bottom: 5px;
            outline: none;
            border: none;
            width: 100%;
        }

        div input::placeholder {
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

        span {
            color: red;
            font-size: 13px;
            margin: auto;
        }

        .link {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 17px;
        }

        .link a {
            text-decoration: none;
            color: grey;
        }

        .link a:hover {
            text-decoration: underline;
            color: grey;
        }

         /*Footer*/
         footer {
            background-color: #333;
            color: white;
        }

        .footer-info{
            width: 90%;
            margin: 0 auto;
            display: flex;
            padding: 45px 0;
        }

        .footer-info h2{
          margin-bottom: 20px;
        }

        

        .about, .contact{
          width: 40%;
          padding: 0 15px;
        }

        .links{
          width: 20%;
          padding: 0 15px;
        }


        .links ul li{
          margin-bottom: 15px;
          font-size: 15px;
        }

        .links ul li a{
            color: white;
        }

       
        .links ul li a:hover{
          color: black;
        }


        .socials{
          margin-top: 30px;
        }

        .socials ul{
          display: flex;
        }

        .socials ul li a{
          display: inline-block;
          margin-right: 30px;
          width: 40px;
          height: 35px;
          background-color: transparent;
          border: 1px solid white;
          text-align: center;
          padding-top:10px;
          color: white;
        }

        .socials ul li a:hover{
          background-color: white;
          color: black;
        }


        .contact ul li{
          display: flex;
          align-items: center;
          margin-bottom: 15px;
        }

        @media  screen and (max-width: 992px) {
            .about, .contact{
                width: 35%;
            }

            .link{
                width: 30%;
            }
        }

        @media screen and (max-width: 767px){
            .about, .link, .contact{
                width: 100%;
                margin-right: 30px;
            }

            .footer-info{
                flex-direction: column;
            }
        }



    </style>

</body>

</html>
