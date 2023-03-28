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




        .container-boxes {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding-top: 20px;
            background-color: #d6edd4;
            padding-bottom: 95px;
        }

        .box {
            display: flex;
            align-items: center;
            width: calc(17% - 20px);
            height: auto;
            margin: 10px;
            float: left;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 5px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            flex-direction: column;
            font-size: 14px;
        }


        .box:hover {
            transform: translateY(-10px);
        }

        .box:nth-child(1) {
            background-color: #FF0032;
        }

        .box:nth-child(2) {
            background-color: #FFEA20;
        }

        .box:nth-child(3) {
            background-color: #537FE7;
        }

        .box:nth-child(4) {
            background-color: #82CD47;
        }

        .box:nth-child(5) {
            background-color: #F2921D;
        }

        .box img {
            width: 100%;
            height: 100%;
            display: block;
            margin-bottom: 25px;
        }

        .box h3 {
            margin-top: 0;
            font-size: 18px;
            color: #333;
        }

        .box p {
            margin-bottom: 0;
            font-size: 14px;
            line-height: 1.3;
            color: #777;
        }

        .box div h2 {
            margin: 20px;


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


    @include('header_templates.header_signed_in')



    <div class="container-boxes">


        <div class="box" id="click">
            <img src="/images/math-book.png" alt="Bild 2">
            <div>
                <h2>Mathematik</h2>
            </div>
        </div>



        <div class="box" onclick="window.location.href='/courses_german'">
            <img src="/images/books.png" alt="Bild 2">
            <div>
                <h2>Deutsch</h2>
            </div>
        </div>



        <div class="box" onclick="window.location.href='/courses_french'">
            <img src="/images/flag.png" alt="Bild 3">
            <div>
                <h2>Französich</h2>
            </div>
        </div>



        <div class="box" onclick="window.location.href='/courses_science'">
            <img src="/images/genetic.png" alt="Bild 4">
            <div>
                <h2>Naturwissenschaften</h2>
            </div>
        </div>


        <div class="box" onclick="window.location.href='/courses_english'">
            <img src="/images/eng.png" alt="Bild 5">
            <div>
                <h2>Englisch</h2>
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







</body>

</html>