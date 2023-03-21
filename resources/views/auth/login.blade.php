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
            <a href="#">Sign In</a>
            <a href="/register"><button class="buttonregister">Sign Up</button> </a>
        </div>
    </header>


    <section class="login-section">
        <div class="login-container">
            <div class="login-info">

            </div>
            <div class="login-formular">
                <div class="form">
                    <div class="alert-danger">{{Session::get('fail')}}</div>
                    <form class="loginForm" action="{{route('login-user')}}" method="post">
                        @csrf
                        <h1>Anmelden</h1>

                        <div class="inputarea">
                            <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email">
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                        </div>

                        <div class="inputarea">
                            <input type="password" id="password" name="password" value="" placeholder="Passwort">
                            <span class="text-danger">@error('password'){{$message}}@enderror</span>
                        </div>

                        <button type="submit" name="submit">Sign In</button>

                        <div class="link">
                            <a href="/register">Noch kein Konto?</a>
                            <a href="login_teacher">Als Lehrer einloggen?</a>
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
            text-decoration: none;
            list-style: none;
            font-family: "Poppins", sans-serif;
          
        }

        body{
            margin: 0;
            padding: 0;
            background-color: #d6edd4;
        }
            
        header {
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 10px;
        }

        img {
          width: 150px;
          height: 150px;
        }

        .navbar {
          display: flex;
          margin: 0;
          padding: 0;
          list-style: none;
        }

        .navbar li {
          margin: 0 10px;
        }

        .navbar a {
          display: block;
          padding: 10px;
          color: #333;
          text-decoration: none;
          font-weight: bold;
        }


        .main {
          display: flex;
          align-items: center;
        }

        .main a {
          margin-right: 10px;
          color: black;
          font-weight: bold;
        }

        .buttonregister {
          background-color: #00B0FF;
          color: #fff;
          border-radius: 25px; 
          border: none;
          padding: 10px 20px;
          font-size: 16px;
          width: 120px;
          height: 40px;
          cursor: pointer;
        }

        .buttonregister:hover{
            scale: 1.05;
        }

        /* Responsive design for mobile */
        @media only screen and (max-width: 767px) {
          header {
            flex-direction: column;
            align-items: center;
            padding: 20px;
          }
      
          .logo {
            margin-bottom: 10px;
          }
      
          .navbar {
            flex-direction: column;
            align-items: center;
            margin: 20px 0;
          }
      
          .navbar li {
            margin: 10px 0;
          }
      
          .main {
            display: block;
            text-align: center;
            margin: 20px 0;
          }
      
          .main a {
            display: block;
            margin-bottom: 10px;
          }
        }


       
        
        .alert-danger{
            display: flex;
            justify-content: center;
            align-items: center;
            color: #FF595B;
        }


        .login-container {
            display: flex;
            width: 100%;
            flex-direction: row;
            height: 70vh;
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

        .login-formular button:hover {
            transition: .1s;
            background: linear-gradient(to right, #0acffe 0%, #495aff 100%);
        }

        span {
            color: red;
            font-size: 13px;
            padding: 0;
            margin: 0;

        }

        .link {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 15px;
            font-size: 15px;
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
