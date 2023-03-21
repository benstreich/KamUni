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
            <p>Textverständnis</p>
        </div>
        <div class="image-container">
            <img src="/images/headphones.png" alt="Image 2" class="listening">
            <p>Hörverstandnis</p>
        </div>
        <div class="image-container">
            <img src="images/writing.png" alt="Image 3" class="writing">
            <p>Schreiben</p>
        </div>
    </div>


</body>

</html>