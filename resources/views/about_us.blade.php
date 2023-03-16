<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    <title>Über Uns</title>
</head>
<style>

</style>



<body>
<header>
    <a href="" class="logo"><img src="/images/logo.png" alt=""></a>
    <ul class="navbar">
        <li><a href="/">Tutoring Uni</a></li>
        <li><a href="/courses">Kurse suchen</a></li>
        <li><a href="#">Über Uns</a></li>
    </ul>



    <div class="main">
        <a href="/login">Sign In</a>
        <a href="/register"><button class="buttonregister">Sign Up</button> </a>
    </div>
</header>

    <div class="container">
        <div class="title">
            <h1>Unser Team</h1>
        </div>
        <div class="team-container">
            <div class="member-info">
                <img src="/images/pb.svg">
                <p><span>Simon Gerhard</span></p>
                <p>Informatiker EFZ</p>
                <p>Mitgründer</p>

                <div class="contact-link">
                    <a href="https://github.com/Simondj9" <i class="fa-brands fa-github"></i></a>
                    <p><a href="mailto:simon_gerhard@sluz.ch">simon_gerhard@sluz.ch</a></p>
                </div>

            </div>

            <div class="member-info">
                <img src="/images/pb.svg">
                <p><span>Rakul Rajgopu</span></p>
                <p>Informatiker EFZ</p>
                <p>Mitgründer</p>

                <div class="contact-link">
                    <a href="https://github.com/rayback00001" <i class="fa-brands fa-github"></i></a>
                    <p><a href="mailto:rakul_rajgopu@sluz.ch">rakul_rajgopu@sluz.ch</a></p>
                </div>

            </div>

            <div class="member-info">
                <img src="/images/pb.svg">
                <p><span>Ben Streich</span></p>
                <p>Informatiker EFZ</p>
                <p>Mitgründer</p>

                <div class="contact-link">
                    <a href="https://github.com/benstreich" <i class="fa-brands fa-github"></i></a>
                    <p><a href="mailto:ben_streich@sluz.ch">ben_streich@sluz.ch</a></p>
                </div>

            </div>

            <div class="member-info">
                <img src="/images/pb.svg">
                <p><span>Lian Eifert</span></p>
                <p>Informatiker EFZ</p>
                <p>Mitgründer</p>

                <div class="contact-link">
                    <a href="https://github.com/LianEifert" <i class="fa-brands fa-github"></i></a>
                    <p><a href="mailto:lian_eifert@sluz.ch">lian_eifert@sluz.ch</a></p>
                </div>

            </div>

        </div>


    </div>

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

        header{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
            padding: 1px 0;

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

       
        .container {
            text-align: center;
            
        }

        .title {
            font-size: 25px;
            margin: auto;
        }

        .team-container{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1200px;
            margin: auto;
            padding: 40px 0;
            
        }

        .member-info {
            margin: 10px;
            padding: 20px;
            box-sizing: border-box;
            max-width: 30%;
            transition: 0.4s;
            background-color: white;
        }

        img{
            width: 200px;
            height:200px;
        }

        p span{
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
        }

        p{
           margin: 13px 0; 
        }

        .contact-link a{
            text-decoration: none;
            color: #3E9EEB;
        }

        .contact-link a{
            text-decoration: none;
            color: #3E9EEB;
        }

        @media screen and (max-width: 812px){
            .member-info{
                max-width: 100%;
            }
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
