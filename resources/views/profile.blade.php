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

@include('header_templates.header_signed_in')



    <div class="container">
        <div class="title">
            <h1>Mein Profil</h1>
        </div>
        <div class="profile-container">
            <div class="profile-info">
                <img src="/images/pb.svg">
                <p><span></span></p>
                <p>{{$data->firstname}} {{$data->lastname}}</p>
                <p>{{$data->email}}</p>
                <div class="logout-link">
                    <p><a href="logout">Logout</a></p>
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
                    <li><a href="#">Home</a></li>
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

        body {
            margin: 0;
            padding: 0;
            background-color: #d6edd4;
        }


        .container {
            text-align: center;
            
        }

        .title {
            font-size: 25px;
            margin: auto;
        }

        .profile-container{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1200px;
            margin: auto;
            padding: 40px 0;
            
        }

        .profile-info {
            margin: 10px;
            padding: 20px;
            box-sizing: border-box;
            max-width: 30%;
            transition: 0.4s;
            background-color: white;
        }

        .profile-info img{
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

        .logout-link a{
            text-decoration: none;
            color: #3E9EEB;
        }

        @media screen and (max-width: 812px){
            .profile-info{
                max-width: 100%;
            }
        }



        /*Footer*/
        footer {
            background-color: #333;
            color: white;
        }

        .footer-info {
            width: 90%;
            margin: 0 auto;
            display: flex;
            padding: 45px 0;
        }

        .footer-info h2 {
            margin-bottom: 20px;
        }



        .about,
        .contact {
            width: 40%;
            padding: 0 15px;
        }

        .links {
            width: 20%;
            padding: 0 15px;
        }


        .links ul li {
            margin-bottom: 15px;
            font-size: 15px;
        }

        .links ul li a {
            color: white;
        }


        .links ul li a:hover {
            color: black;
        }


        .socials {
            margin-top: 30px;
        }

        .socials ul {
            display: flex;
        }

        .socials ul li a {
            display: inline-block;
            margin-right: 30px;
            width: 40px;
            height: 35px;
            background-color: transparent;
            border: 1px solid white;
            text-align: center;
            padding-top: 10px;
            color: white;
        }

        .socials ul li a:hover {
            background-color: white;
            color: black;
        }


        .contact ul li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        @media screen and (max-width: 992px) {

            .about,
            .contact {
                width: 35%;
            }

            .link {
                width: 30%;
            }
        }

        @media screen and (max-width: 767px) {

            .about,
            .link,
            .contact {
                width: 100%;
                margin-right: 30px;
            }

            .footer-info {
                flex-direction: column;
            }
        }

       
 
    </style>
</body>

</html>
