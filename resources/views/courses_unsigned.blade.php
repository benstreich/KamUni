<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KamUni</title>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background-color: #A8E08E;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
        }

        .svgclass {
            position: relative;
            animation-name: camelion;
            animation-duration: 2s;
            margin-top: 20px;
            width: 25%;
            flex-wrap: nowrap;
            height: 100px;

        }


        @keyframes camelion {
            0% {
                opacity: 0;
            }

            25% {
                opacity: 0, 25;
            }

            50% {
                opacity: 0, 5;
            }

            75% {
                opacity: 0, 75;
            }

            100% {
                opacity: 1;
            }


        }

        .nav {
            display: flex;
            width: 100%;
            height: 200px;
            justify-content: space-around;
        }

        .headerelement {
            display: flex;
            width: 25%;
            height: 100px;
            justify-content: center;
            padding-top: 50px;
        }

        .headerclass {
            display: flex;
            width: 100%;
            height: 300px;

        }

        body {
            font-family: Arial, sans-serif;
        }

        .container-boxes {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .box {
            display: flex;
            align-items: center;
            width: calc(17% - 20px);
            height: 200px;
            margin: 10px;
            float: left;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 5px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            flex-direction: column;
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


        @media (max-width: 769px) {
            .box {
                width: 30%;
                margin: 40px;
            }

            .headerclass {
                flex-wrap: wrap;
                height: auto;
            }

            .headerelement {
                width: 50%;
                padding-top: 25px;
            }

            .svgclass {
                width: 50%;
                height: auto;
            }

        }

        @media (max-width: 480px) {
            .box {
                width: 50%;
                margin: 50px;

            }

            .headerelement {
                width: 100%;
                padding-top: 25px;
            }

            .svgclass {
                width: 100%;
                height: auto;
            }
        }
    </style>


@include('header_templates.header_unsigned_in')



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







</body>

<script>
   $('#click').on("click", function(){
      Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Sie müssen sich zuerst Anmelden!',
  footer: '<a href="/login">Anmelden?</a>',
})
   });
  
</script>


</html>