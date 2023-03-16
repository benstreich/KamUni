<style>
    
    header{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
            padding: 1px 0;

        }

        img{
            width: 200px;
            height:200px;
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
</style>
<header>
        <a href="" class="logo"><img src="/images/logo.png" alt=""></a>
        <ul class="navbar">
            <li><a href="/">Tutoring Uni</a></li>
            <li><a href="courses">Kurse suchen</a></li>
            <li><a href="about_us">Über Uns</a></li>
        </ul>

        <div class="main">
            <a href="/login">Sign In</a>
            <a href="/register"><button class="buttonregister">Sign Up</button> </a>
        </div>
    </header>