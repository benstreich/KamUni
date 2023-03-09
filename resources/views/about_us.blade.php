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


    <style>

        * {
            padding: 0;
            font-family: "Poppins", sans-serif;
            margin: 0;
            
        }

        body{
            background-color: #d6edd4;
        }
        .container {
            text-align: center;
            
        }

        .title {
            padding-top: 60px;
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



    </style>




</body>

</html>
