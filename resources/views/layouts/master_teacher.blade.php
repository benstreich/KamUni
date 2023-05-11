<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/signed.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <a href="/welcome_teacher_signedin" class="logo"><img src="/svg/teacher_logo.svg" alt=""></a>
        <ul class="navbar">
            <li><a href="/welcome_teacher_signedin">Tutoring Uni</a></li>
            <li><a href="/create_subject">Kurse erstellen</a></li>
            <li><a href="/about_us_teacher">Über Uns</a></li>
        </ul>

        <div class="main">
            <a href="/profile_teacher"><img src="/images/profile.png"></a>
        </div>
    </header>

    @yield('content')


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
                        <li><a  target="blank" href="https://www.instagram.com/kamuni_kamuni88"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="links">
                <h2>Links</h2>
                <ul>
                    <li><a href="/welcome_teacher_signedin">Home</a></li>
                    <li><a href="/create_subject">Kurse erstellen</a></li>
                    <li><a href="/about_us_teacher">Über Uns</a></li>
                </ul>
            </div>
            <div class="contact">
                <h2>Kontakt</h2>
                <ul>
                <li><a href="mailto:ben_streich@sluz.ch">ben_streich@sluz.ch</a></li>
                    <li><a href="mailto:lian_eifert@sluz.ch">lian_eifert@sluz.ch</a></li>
                    <li><a href="mailto:rakul_rajgopu@sluz.ch">rakul_rajgopu@sluz.ch</a></li>
                    <li><a href="mailto:simon_gerhard@sluz.ch">simon_gerhard@sluz.ch</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>
