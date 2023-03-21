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
            <li><a href="/courses">Kurse suchen</a></li>
            <li><a href="/about_us">Über Uns</a></li>
        </ul>

    </header>

    <table>
        <thead>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Email</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$data->firstname}}</td>
                <td>{{$data->lastname}}</td>
                <td>{{$data->email}}</td>
                <td><a href="logout">Logout</a></td>
            </tr>
        </tbody>
    </table>

    

    <div class="container">
        <div class="accordion">
            <div class="accordion-item">
                <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is the moon
                        sometimes out during the day?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium
                        viverra suspendisse potenti.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Why is the sky
                        blue?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium
                        viverra suspendisse potenti.</p>
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



        header {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
            padding: 1px 0;
            background-color: #d6edd4;

        }

        .logo {
            display: flex;
            align-items: center;
        }

        .navbar {
            display: flex;


        }

        .navbar a {
            padding: 5px 0;
            margin: 10px 30px;
            font-size: 18px;
            font-weight: bold;
            color: black;

        }

        .main {
            display: flex;
            align-items: center;
        }

        .main a {
            margin-right: 45px;
            margin-left: 40px;
            font-weight: 500;
            font-size: 18px;
            font-weight: bold;
            color: black;

        }

        .buttonregister {
            width: 120px;
            height: 40px;
            border-radius: 25px;
            border: 1px solid black;
            background-color: #00B0FF;
            font-size: 18px;
            cursor: pointer;

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

        img {
            width: 200px;
            height: 200px;
        }

        .container {
          margin: 0 auto;
          padding: 4rem;
          width: 48rem;
        }
        
        
        
        .container {
        	 margin: 0 auto;
        	 padding: 4rem;
        	 width: 48rem;
        }
         .accordion .accordion-item {
        	 border-bottom: 1px solid #e5e5e5;
        }
         .accordion .accordion-item button[aria-expanded='true'] {
        	 border-bottom: 1px solid #03b5d2;
        }
         .accordion button {
        	 position: relative;
        	 display: block;
        	 text-align: left;
        	 width: 100%;
        	 padding: 1em 0;
        	 color: #7288a2;
        	 font-size: 1.15rem;
        	 font-weight: 400;
        	 border: none;
        	 background: none;
        	 outline: none;
        }
         .accordion button:hover, .accordion button:focus {
        	 cursor: pointer;
        	 color: #03b5d2;
        }
         .accordion button:hover::after, .accordion button:focus::after {
        	 cursor: pointer;
        	 color: #03b5d2;
        	 border: 1px solid #03b5d2;
        }
         .accordion button .accordion-title {
        	 padding: 1em 1.5em 1em 0;
        }
         .accordion button .icon {
        	 display: inline-block;
        	 position: absolute;
        	 top: 18px;
        	 right: 0;
        	 width: 22px;
        	 height: 22px;
        	 border: 1px solid;
        	 border-radius: 22px;
        }
         .accordion button .icon::before {
        	 display: block;
        	 position: absolute;
        	 content: '';
        	 top: 9px;
        	 left: 5px;
        	 width: 10px;
        	 height: 2px;
        	 background: currentColor;
        }
         .accordion button .icon::after {
        	 display: block;
        	 position: absolute;
        	 content: '';
        	 top: 5px;
        	 left: 9px;
        	 width: 2px;
        	 height: 10px;
        	 background: currentColor;
        }
         .accordion button[aria-expanded='true'] {
        	 color: #03b5d2;
        }
         .accordion button[aria-expanded='true'] .icon::after {
        	 width: 0;
        }
         .accordion button[aria-expanded='true'] + .accordion-content {
        	 opacity: 1;
        	 max-height: 9em;
        	 transition: all 200ms linear;
        	 will-change: opacity, max-height;
        }
         .accordion .accordion-content {
        	 opacity: 0;
        	 max-height: 0;
        	 overflow: hidden;
        	 transition: opacity 200ms linear, max-height 200ms linear;
        	 will-change: opacity, max-height;
        }
         .accordion .accordion-content p {
        	 font-size: 1rem;
        	 font-weight: 300;
        	 margin: 2em 0;
        }
 
    </style>
</body>

</html>
