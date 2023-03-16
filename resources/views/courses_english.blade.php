<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: #d6edd4;
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
    }

    .svgclass {
        animation-name: camelion;
        animation-duration: 4s;
        margin-top: 20px;
        width: 400px;
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
        flex-wrap: nowrap;
        width: 30%;
        height: 200px;
        justify-content: space-around;
    }

    .headerelement {
        display: flex;
        flex-wrap: nowrap;
        width: 25%;
        height: 100px;
        justify-content: center;
        padding-top: 50px;
    }

    .headerclass {
        display: flex;
        flex-wrap: nowrap;
        width: 100%;
        height: 180px;

    }

    .signupin {
        display: flex;
        width: 25%;
        height: 200px;
        justify-content: space-evenly;
        margin-left: 120px;
    }

    .signupinelement {
        width: 100px;
        height: 30px;
        padding-top: 50px;

    }


    .buttonregister {
        border-radius: 30px;
        background-color: #00B0FF;
        font-family: "Poppins", sans-serif;
        border-style: inset;
        width: 100px;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .image-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0 20px;
    }

    img {
        margin: 10px;
        width: 300px;
        height: 300px;
        padding: 0px 50px 0px 50px;
    }

    p {
        font-size: 40px;
        font-weight: bold;
        text-align: center;
        padding-top: 30px;
    }

   

</style>

<body>
   
    @include('header_templates.header_signed_in')

    <div class="container">
        <div class="image-container">
            <img src="/images/reading.png" alt="Image 1" class="reading">
            <p>Reading</p>
        </div>
        <div class="image-container">
            <img src="/images/headphones.png" alt="Image 2" class="listening">
            <p>Listening</p>
        </div>
        <div class="image-container">
            <img src="images/writing.png" alt="Image 3" class="writing">
            <p>Writing</p>
        </div>
    </div>




</body>

</html>