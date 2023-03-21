<style>
    
    header {
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 10px;
        }

        img {
          width: 150px;
          height: 150px;
        }

        .navbar {
          display: flex;
          margin: 0;
          padding: 0;
          list-style: none;
        }

        .navbar li {
          margin: 0 10px;
        }

        .navbar a {
          display: block;
          padding: 10px;
          color: #333;
          text-decoration: none;
          font-weight: bold;
        }

        .main {
          display: flex;
          align-items: center;
        }

        .main a {
          margin-right: 10px;
          color: black;
          font-weight: bold;
        }

        .buttonregister {
          background-color: #00B0FF;
          color: #fff;
          border-radius: 25px; 
          border: none;
          padding: 10px 20px;
          font-size: 16px;
          width: 120px;
          height: 40px;
          cursor: pointer;
        }

        .buttonregister:hover{
            scale: 1.05;
        }

        /* Responsive design for mobile */
        @media only screen and (max-width: 767px) {
          header {
            flex-direction: column;
            align-items: center;
            padding: 20px;
          }
      
          .logo {
            margin-bottom: 10px;
          }
      
          .navbar {
            flex-direction: column;
            align-items: center;
            margin: 20px 0;
          }
      
          .navbar li {
            margin: 10px 0;
          }
      
          .main {
            display: block;
            text-align: center;
            margin: 20px 0;
          }
      
          .main a {
            display: block;
            margin-bottom: 10px;
          }
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