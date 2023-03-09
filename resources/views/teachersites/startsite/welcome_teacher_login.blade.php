<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>KamUni.com</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
<body>
  <style>
   body{
   background-color: #d6edd4;
   font-family: "Poppins", sans-serif;
   margin: 0;
   padding: 0;
}
a  { text-decoration: none; }


.svgclass{
  display: flex;
animation-name: camelion;  
animation-duration: 4s;
margin-top:20px;
width: 30%;
  height: 200px;
  flex-wrap: nowrap;

}
@media (max-width: 769px) {
       

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

            .nav{
              width: 50%;
              padding: 25px;
            
            }

        }

@keyframes camelion {
0%   {  opacity: 0;}
25%  { opacity: 0,25;}
50%  { opacity: 0,5;}
75%  { opacity: 0,75;}
100%  { opacity: 1;}


}

.nav{

  display: flex;
  width: 30%;
  height: 200px;
  justify-content: space-around;
}

.headerelement{
  display: flex;
  width: 25%;
  height: 100px;
  padding-top: 60px;
  justify-content: center;
}

.headerclass{
  display: flex;
  width: 100%;
  height: 200px;

}

.contentclass{
  display: flex;
  width: 100%;
  height: 500px;
  justify-content: flex-end;
  margin-top: 15px;
  animation-name: camelion2;
  animation-duration: 4s;

}

@keyframes camelion2 {
    0%   {  opacity: 0;}
   25%  { opacity: 0,25;}
   50%  { opacity: 0,5;}
   75%  { opacity: 0,75;}
  100%  { opacity: 1;}
}

    /*Footer*/
    footer{
    padding-top: 40px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    background-color: #282D32;
}

footer .container{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 20px;
    background-color: #282D32;
}

footer h4{
    font-size: 14px;
    color: white;
    padding-bottom: 20px;
    background-color: #282D32;
}

footer p{
    font-size: 13px;
    color: #A0A7AD;
    margin-bottom: 8px;
    background-color: #282D32;
}

footer a{
    font-size: 13px;
    color: #A0A7AD;
    margin-bottom: 10px;
    background-color: #282D32;
}

footer a:hover{
    text-decoration: underline;
}

footer .follow{
    margin-top: 20px;
    background-color: #282D32;
}

footer .follow i{
    padding-right: 5px;
    color: #465b52;
    cursor: pointer;
    background-color: #282D32;
}

footer img{
    height: 110px;
    background-color: #E2E2E2;

}

footer .copyright{
    width: 100%;
    text-align: center;
    background-color: #282D32;
}


.accountimage{
   display: flex;
   width: 15%;
   height: 100px;
   margin-left: 250px;
   margin-top: 27px;
   justify-content: flex-end;
}




.buttonregister{
border-radius: 30px; 
background-color: #00B0FF;
font-family: "Poppins", sans-serif;
border-style: inset;
width: 100px;


}</style>

<div class="headerclass">
<div class="svgclass">
<svg xmlns="http://www.w3.org/2000/svg" width="332.35" height="163.911" viewBox="0 0 332.35 163.911">
  <path id="Pfad_52" data-name="Pfad 52" d="M564.987,49.572s-93.222-59.626-134.828,57.665C426.023,118.9,425.9,140.58,425.9,140.58a56.159,56.159,0,0,0-.638,8.81c.022.488-.046,1.172,0,1.61-.111.925.083,1.577,0,2.5-4.662,51.571,40.3,49.263,59.014,35a1.9,1.9,0,0,0,.8-.765c.135-.242.412-.421.624-.729a3.312,3.312,0,0,0,.5-.926c.127-.42.347-1.109.513-1.684.047-.164.186-.226.223-.48a1.939,1.939,0,0,1,.19-.572c.129-.4.675-2.069.826-2.529a12.7,12.7,0,0,0,.885-5.708,64.8,64.8,0,0,0-.968-8.231,26.606,26.606,0,0,0-3.349-8.833l-1.654-2.029-2.819-2.17-2.1-1.209-2.152-.811-2.457-.449-2.159-.37-3.864-.188s-3.218-.016-5.867.188a27.415,27.415,0,0,0-4.812.818l-2,1.028-1.388,1.184-1.485,1.96-1.439,2.2-1.259,2.3-1.424,2.839-.666,2.278-.2,1.893a32.372,32.372,0,0,0,0,5.327c.089,1,.037,1.895.2,2.857a19.541,19.541,0,0,0,.786,2.987l1.98,2.219,1.684,1.961,2.239,1.6,2.794.819,3.072.943h5.682l3.183-.943,2.782-1.939,4.084-3.184,1.388-1.48.648-1.609.833-1.965V172.83l-.185-4.679-.648-2.182-.648-1.424-1.154-1.211-1.093-1.009-1.7-.794h-7.178l-3,.444-2.11,1.36L459.2,164.9,458.14,166.5l-.516,1.467-.2,3.01v2.189l.2,1.584.286.462.44.164h.326l.52-.46,1.1-1.751,1.073-2.189,1.417-1.535,1.324-1.295,1.6-.7h1.518l1.721.366,1.758.61.469,2.552v3.773l-.469,1.609-1.018,1.165-1.8,1.147-2.683.971-3.091.185-3.308-.415-1.392-1.406-.963-2.909a21.347,21.347,0,0,1-.589-4.12,31.43,31.43,0,0,1,.156-3.706l.432-1.665.607-1.871,1.566-1.766,2.42-1.655,3.061-1.285,1.908-.265h2.733l4.343.265,3.174,2.011,2.526,2.289,1.647,4.119.239,2.345.224,2.2v2.265l-.2,1.425-.26,1.378-.739,1.359-.908,1.73-2.147,2.7-1.9,1.821-2.055,1.887-3,1.167-5.579.905H458.35l-6.111-.905-3.98-2.117-3.152-2.758-1.7-2.446L442,176.8l-.449-2.044-2.82-23.385.625-12.443,2.1-8.127,7.252-8.947,2.1-2.594s1.929-1.438,3.387-2.367a33.6,33.6,0,0,1,3.165-1.739l4.941-2.256,2.848-1.587.421-.147.455-.127.361.127.24.147.4.549.412.7.369.687.264.722.279.67.178.472.158.381.137.32.18.22.257.115.6.249.944.446,1.1.541.306.166.168.088.243.113.231.16.211.066h.25l.277-.137.137-.2.137-.254,1.118-2.339.421-.348.566-.247.58.247,6.921,5.39.849.7.21.547-.21.552-1.922,2.53-.74,1.03-.334.638v.362l.334.145,6.878-1.639,4.629-.983.638-.49.515-.686v-.907l.3-10.714v-1l.436-.809.613-.711,1.079-.441,13.773-.961,21.528-1.8,14.3-3.89,18.644,14.907,11.972,4.315h1.179l1.172-.467,1.588-1.083,1.572-1.116,1.751-1.648-1.981-5.389-.45-5.619.45-3.157,1.52.563,3.753.344h10.915l10.29-.344,7.222-2.64,2.724-1.585,2.155-1.341,5.245-4.185,2.561-2.519,2.108-2.567.5-2.56v-2.09l-.5-2.215L624.17,67.277l-4.677-9.888-1.3-1.417-1.626-1.212s-.767-.18-2.14-.362A75.041,75.041,0,0,1,604.1,52.45a37.941,37.941,0,0,1-9.883-4.157L576.959,37.02l-1.118-.263-1.375-.177-1.632.268-.917.439-.192.092-.706.654-1.111,1.432-1.029,1.948-1.4,3.918-.788,2.5-.471,1.467Z" transform="translate(-345.165 -33.918)" fill="#d8364e" stroke="#707070" stroke-width="1"/>
  <path id="Pfad_53" data-name="Pfad 53" d="M186.069,273.1H182.89l-26.777,24.352-15.624,6.788L126.966,306.5H119.7l-7.357-.355-7.3.355.17,2.228v1.756l.929,2.191,1.088,2.917,11.819-1.088,15.249-.434,16.217-1.562h14.116l16.594,6.627,16.729,3.933a38.2,38.2,0,0,1,3.933,1.4h5.064v-2.748l-5.711-1.4-9.7-2.532-10.317-3.718-12.041-6.034-3.556-1.536h-9.509l3.206-3.852,25.322-23.975c0-.054,1.428-1.993,1.428-1.993l.573-1.717Z" transform="translate(124.904 -233.188)" fill="#5b3a29" stroke="#707070" stroke-width="1"/>
  <path id="Pfad_54" data-name="Pfad 54" d="M894.847,479.73l-10.937-8.674-6.529.238-6.675.479-6.2.537-6.726.276-7.952.406-6,.575-6.632.638-11.466.408-.294,10.725,5.027-1.5,6.733-1.364,7.381-.916,21.6-.916,14.062-.916Z" transform="translate(-676.215 -397.676)" fill="#5b3a29" stroke="#707070" stroke-width="1"/>
  <path id="Pfad_55" data-name="Pfad 55" d="M1341.957,528.992l3.235-4.992.18-.318-.18-.549-5.77-4.43-2.1-1.717-.549-.172-.567.172-.455.472-.808.6-1.206.308a12.158,12.158,0,0,1-1.981,0h-2.006l-2.728.337-2.678,1.285-2.71,1.147-2.646.638-2.837.351-2.869.5h-2.53l-8.5,10.47-1.484,5.759,4.805,1.877a10.371,10.371,0,0,0,3.135,0c1.492-.2,3.334-.857,5.047-1.217a20.777,20.777,0,0,0,4.2-1.435l7.5-4.46,4.665-2.194c-.161,0,5.383-1.668,5.383-1.668Z" transform="translate(-1205.97 -436.293)" fill="#5b3a29" stroke="#707070" stroke-width="1"/>
  <g id="Ellipse_13" data-name="Ellipse 13" transform="translate(232.664 23.528)" fill="rgba(184,235,233,0.77)" stroke="#707070" stroke-width="1">
    <circle cx="9.798" cy="9.798" r="9.798" stroke="none"/>
    <circle cx="9.798" cy="9.798" r="9.298" fill="none"/>
  </g>
  <path id="Pfad_51" data-name="Pfad 51" d="M1726.11,550.955,1724.9,554.9l-.4,2.4-.4,2.571-.433,2.121v1.491l-.373,1.337-8.069.537-10.018.354-7.937.812-16.22,1.575h-14.725l-9.3.573h-8.991l-2.77-1.158-.926-2.156V560.6l.926-3.994,1.29-3.376,4.067-1.5,5.961-.184,9.7.184h10.88l13.885-.6h16.645Z" transform="translate(-1643.834 -465.422)" fill="#5b3a29" stroke="#707070" stroke-width="1"/>
  <g id="Ellipse_14" data-name="Ellipse 14" transform="translate(238.953 29.761)" fill="rgba(35,54,231,0.22)" stroke="#707070" stroke-width="1">
    <ellipse cx="3.563" cy="3.563" rx="3.563" ry="3.563" stroke="none"/>
    <ellipse cx="3.563" cy="3.563" rx="3.063" ry="3.063" fill="none"/>
  </g>
</svg>


    </div>
    
<div class="nav">
  
  <div class="headerelement">Tutoring uni</div>
  <div class="headerelement">Kurse suchen</div>
  <div class="headerelement">Über uns</div>
     
</div>

<div class="accountimage">

    
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="73" height="72" viewBox="0 0 73 72">
  <defs>
    <clipPath id="clip-path">
      <path id="Pfad_33" data-name="Pfad 33" d="M72.314,35.517c0,19.584-16.144,35.517-36.157,35.517S0,55.1,0,35.517C0,15.9,16.188,0,36.157,0S72.314,15.9,72.314,35.517Z" transform="translate(0 0)"/>
    </clipPath>
  </defs>
  <g id="Gruppe_38" data-name="Gruppe 38" transform="translate(-1712 -28)">
    <g id="Ellipse_17" data-name="Ellipse 17" transform="translate(1712 28)" fill="#fff" stroke="#707070" stroke-width="1">
      <ellipse cx="36.5" cy="36" rx="36.5" ry="36" stroke="none"/>
      <ellipse cx="36.5" cy="36" rx="36" ry="35.5" fill="none"/>
    </g>
    <g id="Gruppe_32" data-name="Gruppe 32" transform="translate(1712.462 28.339)">
      <path id="Pfad_20" data-name="Pfad 20" d="M72.314,35.517c0,19.584-16.144,35.517-36.157,35.517S0,55.1,0,35.517C0,15.9,16.188,0,36.157,0S72.314,15.9,72.314,35.517Z" transform="translate(0 0)" fill="#2a96ae"/>
      <g id="Gruppe_2" data-name="Gruppe 2" transform="translate(0 0)" clip-path="url(#clip-path)">
        <path id="Pfad_21" data-name="Pfad 21" d="M11.667,0S.267,2.537.027,2.6,1.221,14.968,1.221,14.968l14.21-6.1Z" transform="translate(20.466 15.789)" fill="#fab687"/>
        <path id="Pfad_22" data-name="Pfad 22" d="M65.7,21.516H0A20.264,20.264,0,0,1,15.583,1.922c.174-.05.359-.091.543-.131.42-.091.84-.181,1.27-.272.574-.111,1.137-.211,1.711-.312.43-.08.861-.151,1.291-.221.041-.01.092-.01.133-.02a79.033,79.033,0,0,1,24.639,0c.041.01.092.01.133.02.318.05.625.1.942.161.686.121,1.373.242,2.059.382.42.081.84.171,1.26.262h.01c.184.04.369.081.543.131A20.264,20.264,0,0,1,65.7,21.516Z" transform="translate(3.221 49.63)" fill="#445a6b"/>
        <path id="Pfad_23" data-name="Pfad 23" d="M26.2.986a79.115,79.115,0,0,0-24.905,0C.861,1.057.43,1.127,0,1.208A61.812,61.812,0,0,0,7.089,11.382c.236.287.472.561.708.842a13.243,13.243,0,0,1,3.477,2.259c.554.472,1.07.985,1.6,1.478.262.241.535.469.8.707-.47-.423-.263-.212.068.01,1.991-1.417,3.912-2.947,5.821-4.56,3.637-3.079,6.567-6.38,7.571-10.969C26.821,1.087,26.514,1.036,26.2.986Z" transform="translate(22.328 49.63)" fill="#fab687"/>
        <path id="Pfad_24" data-name="Pfad 24" d="M30.909.564c-3.883,7.92-8.852,13.314-14.794,16.071l-.656.3-.656-.3C8.852,13.878,3.873,8.473,0,.553.574.443,1.137.342,1.711.242,2.141.161,2.571.091,3,.02c.041-.01.092-.01.133-.02,3.36,6.571,7.5,11.13,12.325,13.586C20.275,11.13,24.414,6.571,27.774,0c.041.01.092.01.133.02.318.05.625.1.942.161C29.536.3,30.222.423,30.909.564Z" transform="translate(20.617 50.596)" fill="#d2dbe0"/>
        <path id="Pfad_25" data-name="Pfad 25" d="M12.832,0V9.072a6.477,6.477,0,0,1-6.225,6.7H6.225A6.477,6.477,0,0,1,0,9.072V0Z" transform="translate(29.656 40.305)" fill="#fab687"/>
        <path id="Pfad_26" data-name="Pfad 26" d="M6.441,11.593h0C3.161,11.593.361,9.654.073,7.1a11.676,11.676,0,0,1,0-2.6C.358,1.938,3.16,0,6.439,0h0c3.53,0,6.391,2.241,6.391,5V6.588C12.832,9.352,9.971,11.593,6.441,11.593Z" transform="translate(29.655 37.158)" fill="#e59865"/>
        <path id="Pfad_27" data-name="Pfad 27" d="M15.578.607C-7.988,13.1,2.183,9.1,2.183,19.57s6,18.964,13.4,18.964,13.4-8.49,13.4-18.964S22.088-2.845,15.578.607Z" transform="translate(20.494 8.776)" fill="#fab687"/>
        <path id="Pfad_28" data-name="Pfad 28" d="M31.348,12.921c-.444,2.963-2.18,11.792-2.18,11.792V19.1a11.031,11.031,0,0,0-1.126-5.043,8.516,8.516,0,0,0-1.157-1.766,4.065,4.065,0,0,0-3.027-1.634,3.469,3.469,0,0,0-1.986.665,12.64,12.64,0,0,1-2.1,1.212h0a8.755,8.755,0,0,1-7.608-.221,2.592,2.592,0,0,1-.572-.377,3.818,3.818,0,0,0-2.717-1.279,4.031,4.031,0,0,0-3.027,1.634C4.127,14.3,2.98,17.954,2.98,22.135c0,1.045.062.375.207,1.329.134.416.268.842.424,1.248C-3.828,11.3,1.926,5.341,5.759,6.8c0-3.755,4-6.911,8.936-6.8C19.778.125,32.092,7.888,31.348,12.921Z" transform="translate(19.614 6.877)" fill="#663430"/>
        <ellipse id="Ellipse_5" data-name="Ellipse 5" cx="1.808" cy="1.776" rx="1.808" ry="1.776" transform="translate(27.448 28.909)" fill="#3d2f46"/>
        <ellipse id="Ellipse_6" data-name="Ellipse 6" cx="1.808" cy="1.776" rx="1.808" ry="1.776" transform="translate(40.179 28.909)" fill="#3d2f46"/>
        <ellipse id="Ellipse_7" data-name="Ellipse 7" cx="3.12" cy="3.957" rx="3.12" ry="3.957" transform="translate(46.061 26.905)" fill="#fab687"/>
        <ellipse id="Ellipse_8" data-name="Ellipse 8" cx="3.12" cy="3.957" rx="3.12" ry="3.957" transform="translate(19.086 26.905)" fill="#fab687"/>
        <g id="Gruppe_1" data-name="Gruppe 1" transform="translate(22.605 25.816)">
          <path id="Pfad_29" data-name="Pfad 29" d="M10.9,1.684A2.1,2.1,0,0,0,10.559.9a1.079,1.079,0,0,0-.1-.122l-.01-.01A2.153,2.153,0,0,0,8.782,0H.921A.9.9,0,0,0,.549.081.8.8,0,0,0,.2.345.767.767,0,0,0,.032.69a.851.851,0,0,0-.01.426L.993,4.972A3.757,3.757,0,0,0,4.671,7.814H6.313A3.829,3.829,0,0,0,9.888,5.358l.93-2.5A2.09,2.09,0,0,0,10.9,1.684Zm-.868.893-.93,2.5A2.968,2.968,0,0,1,6.313,6.992H4.671A2.951,2.951,0,0,1,1.8,4.78L.859,1,.838.923.921.812H8.782a1.332,1.332,0,0,1,1.1.558A1.3,1.3,0,0,1,10.032,2.577ZM23.483.345a.81.81,0,0,0-.269-.223A.87.87,0,0,0,22.76,0H14.9a2.15,2.15,0,0,0-1.643.741l-.01.01L13.121.9a1.8,1.8,0,0,0-.341.771v.01a2,2,0,0,0,.083,1.177l.93,2.5a3.8,3.8,0,0,0,3.564,2.456H19.01a3.766,3.766,0,0,0,3.678-2.841l.971-3.856a.914.914,0,0,0,.01-.335A.911.911,0,0,0,23.483.345Zm-1.6,4.435A2.951,2.951,0,0,1,19.01,6.992H17.357a2.988,2.988,0,0,1-2.789-1.918l-.93-2.5a1.276,1.276,0,0,1,.165-1.2A1.3,1.3,0,0,1,14.9.812H22.76l.083.112Z" transform="translate(1.176 0.974)" fill="#0f1619"/>
          <path id="Pfad_30" data-name="Pfad 30" d="M14.3,1.643a2.4,2.4,0,0,0-1.315-.312,2.813,2.813,0,0,0-1.266.358A3.011,3.011,0,0,0,11.273,2a2.854,2.854,0,0,1,.3.838c.195-.081.392-.157.578-.216a3.166,3.166,0,0,1,.869-.146,3.142,3.142,0,0,1,1.4.356,2.887,2.887,0,0,1,.307-.885A2,2,0,0,0,14.3,1.643ZM26.178.061V1.126a3.3,3.3,0,0,0-1.333.629,4.062,4.062,0,0,0-.413.426.569.569,0,0,1-.124-1.035l.083-.051ZM2.128,1.786a.616.616,0,0,1-.072.173.022.022,0,0,1-.021.02.525.525,0,0,1-.289.2,3.67,3.67,0,0,0-.537-.518A3.106,3.106,0,0,0,0,1.116C0,.741.021.365.041,0L1.725,1.055l.145.091A.575.575,0,0,1,2.128,1.786Z" transform="translate(0 0)" fill="#0f1619"/>
        </g>
        <path id="Pfad_31" data-name="Pfad 31" d="M8.832.781A4.371,4.371,0,0,1,6.353,3.958a4.337,4.337,0,0,1-1.921.436A4.46,4.46,0,0,1,1.394,3.227,4.372,4.372,0,0,1,.01.781.678.678,0,0,1,.681,0H8.161A.678.678,0,0,1,8.832.781Z" transform="translate(31.351 39.822)" fill="#663430"/>
        <path id="Pfad_32" data-name="Pfad 32" d="M4.959,1.37a4.337,4.337,0,0,1-1.921.436A4.46,4.46,0,0,1,0,.639,3.694,3.694,0,0,1,2.138,0,3.261,3.261,0,0,1,4.959,1.37Z" transform="translate(32.745 42.41)" fill="#ef4f63"/>
      </g>
    </g>
  </g>
</svg>




</div> 


</div>

      <div class="contentclass">
      <svg xmlns="http://www.w3.org/2000/svg" width="1050.887" height="339.163" viewBox="0 0 1050.887 339.163">
  <path id="Pfad_12" data-name="Pfad 12" d="M540.771,60.917S703.779-43.345,776.532,161.751c7.232,20.388,7.446,58.3,7.446,58.3a98.209,98.209,0,0,1,1.115,15.4c-.038.854.081,2.049,0,2.815.194,1.617-.146,2.757,0,4.372,8.153,90.178-70.469,86.142-103.192,61.194a3.322,3.322,0,0,1-1.4-1.338c-.236-.424-.72-.736-1.091-1.274a5.788,5.788,0,0,1-.881-1.619c-.223-.734-.606-1.939-.9-2.945-.083-.288-.325-.4-.391-.839a3.4,3.4,0,0,0-.332-1c-.225-.7-1.18-3.618-1.444-4.423-1.384-4.211-1.859-6.659-1.547-9.982.494-5.249.706-10.223,1.693-14.393a46.521,46.521,0,0,1,5.857-15.446l2.892-3.549,4.93-3.795,3.68-2.115,3.763-1.418,4.3-.784,3.775-.646,6.757-.329s5.627-.029,10.259.329a47.94,47.94,0,0,1,8.414,1.431l3.495,1.8,2.427,2.07,2.6,3.427,2.517,3.849,2.2,4.027,2.491,4.965,1.165,3.983.358,3.31a56.6,56.6,0,0,1,0,9.314c-.155,1.743-.066,3.313-.358,5a34.174,34.174,0,0,1-1.374,5.224l-3.463,3.881-2.945,3.428-3.916,2.806-4.886,1.431-5.372,1.649H715.24l-5.566-1.649-4.865-3.391-7.141-5.568-2.427-2.587-1.133-2.814-1.456-3.435v-3.971l.324-8.182,1.132-3.816,1.133-2.49,2.018-2.118,1.91-1.764,2.968-1.389H714.69l5.243.776,3.689,2.377,2.136,2.733,1.848,2.813.9,2.564.355,5.263v3.827l-.355,2.77-.5.808-.77.287h-.57l-.91-.8-1.924-3.062-1.877-3.827-2.477-2.684-2.316-2.264-2.8-1.222h-2.654l-3.009.64-3.075,1.067-.82,4.463v6.6l.82,2.814,1.78,2.037,3.139,2.005,4.692,1.7,5.4.323,5.784-.725,2.434-2.459,1.684-5.086a37.326,37.326,0,0,0,1.029-7.205,54.941,54.941,0,0,0-.274-6.48l-.756-2.911-1.062-3.271-2.738-3.089-4.232-2.895-5.352-2.248-3.336-.464h-4.78l-7.594.464-5.55,3.517-4.417,4-2.88,7.2-.417,4.1-.392,3.848v3.961l.354,2.491.455,2.41,1.292,2.376,1.588,3.025,3.754,4.722,3.331,3.184,3.594,3.3,5.242,2.041,9.755,1.583h10.074l10.686-1.583,6.96-3.7,5.511-4.822,2.965-4.277,2.47-6.315.785-3.573,4.932-40.892-1.094-21.759-3.664-14.211L744.108,187.3l-3.676-4.536s-3.373-2.515-5.922-4.14a58.757,58.757,0,0,0-5.534-3.04l-8.64-3.946-4.98-2.775-.736-.257-.8-.223-.63.223-.421.257-.691.96-.721,1.215-.645,1.2-.463,1.263-.489,1.172-.311.826-.275.666-.24.559-.315.385-.448.2-1.049.435-1.65.78-1.93.947-.534.291-.294.153-.425.2-.4.28-.369.116h-.437l-.485-.239-.239-.355-.239-.444-1.955-4.091-.735-.609-.99-.431-1.015.431-12.1,9.424-1.484,1.22-.367.956.367.966,3.36,4.424,1.294,1.8.583,1.116v.633l-.583.254-12.027-2.865-8.094-1.719-1.115-.857-.9-1.2v-1.586l-.524-18.734v-1.751l-.762-1.414L662,164.2l-1.887-.771-24.083-1.68-37.644-3.143-25.013-6.8-32.6,26.066-20.934,7.545h-2.062l-2.049-.817L512.95,182.7l-2.748-1.952-3.062-2.882,3.464-9.423.787-9.826-.787-5.52-2.658.984-6.563.6H482.3l-17.993-.6-12.628-4.616-4.763-2.771-3.768-2.345-9.172-7.319-4.479-4.405-3.686-4.489-.881-4.476v-3.655l.881-3.874,11.476-24.26,8.179-17.29,2.281-2.478,2.843-2.12s1.341-.314,3.741-.633a131.214,131.214,0,0,0,18.043-3.405,66.347,66.347,0,0,0,17.282-7.269l30.185-19.713,1.955-.461,2.4-.31,2.853.468,1.6.768.335.16,1.235,1.144,1.944,2.5,1.8,3.406,2.451,6.851,1.379,4.363.823,2.564Z" transform="translate(227.806 19.379)" fill="#d8364e" stroke="#707070" stroke-width="1"/>
  <path id="Pfad_13" data-name="Pfad 13" d="M141.544,273.1H147.1l46.822,42.582,27.321,11.87,23.647,3.957H257.6l12.864-.62,12.768.62-.3,3.9v3.07l-1.624,3.831-1.9,5.1-20.667-1.9-26.665-.758-28.357-2.732H179.039L150.023,353.6l-29.252,6.877c0-.283-6.877,2.45-6.877,2.45h-8.856v-4.8l9.986-2.449,16.958-4.428,18.041-6.5,21.056-10.551,6.218-2.685h16.628l-5.605-6.736L144.041,282.85c0-.094-2.5-3.486-2.5-3.486l-1-3Z" transform="translate(467.647 -150.388)" fill="#5b3a29" stroke="#707070" stroke-width="1"/>
  <path id="Pfad_14" data-name="Pfad 14" d="M825.438,486.224l19.124-15.168,11.417.416,11.672.837,10.835.939,11.76.482,13.9.71,10.5,1,11.6,1.115,20.05.713.515,18.755-8.791-2.616-11.774-2.385-12.907-1.6-37.778-1.6-24.588-1.6Z" transform="translate(-54.78 -289.821)" fill="#5b3a29" stroke="#707070" stroke-width="1"/>
  <g id="Ellipse_3" data-name="Ellipse 3" transform="translate(711.857 94.062)" fill="rgba(184,235,233,0.77)" stroke="#707070" stroke-width="1">
    <ellipse cx="17.132" cy="17.132" rx="17.132" ry="17.132" stroke="none"/>
    <ellipse cx="17.132" cy="17.132" rx="16.632" ry="16.632" fill="none"/>
  </g>
  <g id="Ellipse_4" data-name="Ellipse 4" transform="translate(722.664 104.962)" fill="rgba(35,54,231,0.22)" stroke="#707070" stroke-width="1">
    <ellipse cx="6.23" cy="6.23" rx="6.23" ry="6.23" stroke="none"/>
    <ellipse cx="6.23" cy="6.23" rx="5.73" ry="5.73" fill="none"/>
  </g>
  <path id="Pfad_5" data-name="Pfad 5" d="M1644.334,550.955l.61,6.9.2,4.2.2,4.5.219,3.709v2.608l.188,2.338,4.074.939,5.059.619,4.008,1.419,8.191,2.754h7.436l4.7,1h4.54l1.4-2.024.468-3.77V567.82l-.468-6.984-.651-5.9-2.054-2.63-3.01-.322-4.9.322h-5.495l-7.011-1.052h-8.405Z" transform="translate(-635.242 -348.47)" fill="#5b3a29" stroke="#707070" stroke-width="1"/>
  <g id="Pfad_18" data-name="Pfad 18" fill="#fff">
    <path d="M 257.6999816894531 300.7077026367188 C 240.2351531982422 300.7077026367188 222.7814788818359 299.679443359375 205.8238220214844 297.6515197753906 C 189.2983093261719 295.67529296875 173.0437316894531 292.7264404296875 157.5114898681641 288.8871154785156 C 142.2633209228516 285.1179504394531 127.5569839477539 280.4530334472656 113.8010635375977 275.0218811035156 C 100.179069519043 269.6436157226562 87.37039947509766 263.467529296875 75.73089599609375 256.6651916503906 C 64.09590148925781 249.8655395507812 53.53390121459961 242.3844451904297 44.33823394775391 234.4297790527344 C 35.06006622314453 226.4037780761719 27.09239959716797 217.8251953125 20.65639877319336 208.9325256347656 C 14.10673332214355 199.8828735351562 9.07723331451416 190.4145355224609 5.707399845123291 180.79052734375 C 2.252066373825073 170.9220275878906 0.4999829828739166 160.7657775878906 0.4999829828739166 150.6038665771484 C 0.4999829828739166 140.4419555664062 2.252066373825073 130.2857055664062 5.707399845123291 120.4171981811523 C 9.07723331451416 110.7931976318359 14.10673332214355 101.3248672485352 20.65639877319336 92.27519989013672 C 27.09239959716797 83.38253021240234 35.06006622314453 74.80394744873047 44.33823394775391 66.77794647216797 C 53.53390121459961 58.82328414916992 64.09590148925781 51.34220123291016 75.73089599609375 44.54253387451172 C 87.37039947509766 37.74020004272461 100.179069519043 31.56411743164062 113.8010635375977 26.18586730957031 C 127.5569839477539 20.75469970703125 142.2633209228516 16.08978271484375 157.5114898681641 12.32061672210693 C 173.0437316894531 8.481283187866211 189.2983093261719 5.532449722290039 205.8238220214844 3.55620002746582 C 222.7814788818359 1.52828323841095 240.2351531982422 0.5000332593917847 257.6999816894531 0.5000332593917847 C 273.9182434082031 0.5000332593917847 290.1511535644531 1.387616634368896 305.9477233886719 3.138199806213379 C 321.3626403808594 4.846449851989746 336.5845642089844 7.400533199310303 351.1906433105469 10.72953319549561 C 365.5325622558594 13.99828338623047 379.4643859863281 18.05553245544434 392.5991516113281 22.78853416442871 C 405.591064453125 27.47011566162109 417.9536437988281 32.86661529541016 429.3434143066406 38.82836532592773 C 440.6999816894531 44.77270126342773 451.2141418457031 51.34403228759766 460.5938110351562 58.35978317260742 C 470.0227355957031 65.41236877441406 478.41015625 72.99286651611328 485.5231628417969 80.89061737060547 C 492.7287292480469 88.89128112792969 498.7130737304688 97.31453704833984 503.3099975585938 105.9263687133789 C 507.9990539550781 114.7111968994141 511.3077392578125 123.8126983642578 513.1439819335938 132.9781951904297 C 513.3629760742188 134.0712890625 515.4110717773438 135.5207061767578 537.0765380859375 138.9022827148438 C 550.9811401367188 141.0725402832031 569.8015747070312 143.5361175537109 588.0022583007812 145.9186096191406 C 606.4573364257812 148.3343658447266 625.5407104492188 150.8324432373047 639.8302612304688 153.0628662109375 C 647.518798828125 154.2629547119141 653.2247924804688 155.2890319824219 657.2742919921875 156.1995391845703 C 659.4559936523438 156.6901092529297 661.1575927734375 157.1502075195312 662.3319702148438 157.5670318603516 C 663.85400390625 158.1072692871094 664.1185302734375 158.4451141357422 664.15673828125 158.5089721679688 C 664.1396484375 161.086669921875 661.587646484375 163.7455902099609 656.57080078125 166.411865234375 C 651.9070434570312 168.8905334472656 645.1996459960938 171.3667907714844 636.0653076171875 173.9820404052734 C 619.083251953125 178.8441162109375 596.3442993164062 183.3876953125 574.3540649414062 187.7816925048828 C 535.8673095703125 195.4718627929688 499.5149841308594 202.7356109619141 492.8528137207031 211.4788665771484 C 482.9234008789062 224.5100402832031 469.8484802246094 236.655029296875 453.9912414550781 247.5764465332031 C 438.2174072265625 258.4405212402344 419.9255676269531 267.9334411621094 399.6238098144531 275.7916870117188 C 357.5122375488281 292.0918579101562 308.4357299804688 300.7077026367188 257.6999816894531 300.7077026367188 Z" stroke="none"/>
    <path d="M 257.6999816894531 1.000030517578125 C 240.2549133300781 1.000030517578125 222.8212280273438 2.027130126953125 205.8832397460938 4.052703857421875 C 189.3780517578125 6.026519775390625 173.1438293457031 8.971527099609375 157.6314697265625 12.8060302734375 C 142.4048461914062 16.56985473632812 127.7199096679688 21.22793579101562 113.9847412109375 26.65093994140625 C 100.3862915039062 32.01986694335938 87.6007080078125 38.1846923828125 75.983154296875 44.97421264648438 C 64.3746337890625 51.75845336914062 53.83782958984375 59.22145080566406 44.66534423828125 67.15611267089844 C 35.41632080078125 75.15695190429688 27.47479248046875 83.70686340332031 21.0614013671875 92.568359375 C 14.5401611328125 101.5787811279297 9.53314208984375 111.0041198730469 6.1793212890625 120.5823669433594 C 2.7425537109375 130.397705078125 1 140.4983673095703 1 150.6038665771484 C 1 160.7093658447266 2.7425537109375 170.8100280761719 6.1793212890625 180.6253662109375 C 9.53314208984375 190.20361328125 14.5401611328125 199.6289520263672 21.0614013671875 208.6393737792969 C 27.47479248046875 217.5008697509766 35.41632080078125 226.05078125 44.66534423828125 234.0516052246094 C 53.83782958984375 241.9862823486328 64.3746337890625 249.4492797851562 75.983154296875 256.2335205078125 C 87.6007080078125 263.0230407714844 100.3862915039062 269.1878662109375 113.9847412109375 274.5567932128906 C 127.7199096679688 279.9797973632812 142.4048461914062 284.6378784179688 157.6314697265625 288.4017028808594 C 173.1438293457031 292.2362060546875 189.3780517578125 295.1812133789062 205.8832397460938 297.155029296875 C 222.8212280273438 299.1806030273438 240.2549133300781 300.2077026367188 257.6999816894531 300.2077026367188 C 308.3746643066406 300.2077026367188 357.3886413574219 291.6035461425781 399.4433288574219 275.3253784179688 C 419.708740234375 267.4812927246094 437.9658813476562 258.0066223144531 453.7076416015625 247.1647033691406 C 469.521240234375 236.2732849121094 482.5577392578125 224.1648559570312 492.455078125 211.17578125 C 495.5790710449219 207.0759582519531 504.923828125 203.1028747558594 521.8635864257812 198.6724548339844 C 536.643798828125 194.8068695068359 554.91357421875 191.1562805175781 574.2560424804688 187.2913665771484 C 596.2364501953125 182.8993682861328 618.9652099609375 178.3578643798828 635.9276733398438 173.5012817382812 C 645.0279541015625 170.8957824707031 651.7036743164062 168.432373046875 656.3361206054688 165.9703674316406 C 661.037841796875 163.4714965820312 663.4961547851562 161.0316314697266 663.649169921875 158.7135772705078 C 663.459228515625 158.5769653320312 662.9471435546875 158.2848968505859 661.6499633789062 157.8638610839844 C 660.3819580078125 157.4521942138672 658.6106567382812 156.9984436035156 656.38525390625 156.5151977539062 C 652.23974609375 155.6149444580078 646.5200805664062 154.6038665771484 638.8994750976562 153.4241943359375 C 624.7249145507812 151.2298736572266 606.0232543945312 148.7818603515625 587.9373779296875 146.4143676757812 C 569.733642578125 144.0314483642578 550.91015625 141.5674438476562 536.99951171875 139.3962860107422 C 529.4989013671875 138.2256164550781 523.9608154296875 137.2274475097656 520.06884765625 136.3448638916016 C 513.5285034179688 134.8617858886719 512.8292236328125 133.9525299072266 512.6537475585938 133.0763702392578 C 510.8270874023438 123.9588623046875 507.5349731445312 114.9035339355469 502.8688354492188 106.161865234375 C 498.2910766601562 97.585693359375 492.3301391601562 89.19578552246094 485.1515502929688 81.22520446777344 C 478.0603942871094 73.35162353515625 469.6972351074219 65.79328918457031 460.2944030761719 58.76019287109375 C 450.9359741210938 51.76028442382812 440.444580078125 45.203369140625 429.1114807128906 39.2713623046875 C 417.7418212890625 33.32012939453125 405.4002380371094 27.93276977539062 392.4296569824219 23.25894165039062 C 379.3139038085938 18.53277587890625 365.4017333984375 14.48129272460938 351.0795593261719 11.217041015625 C 336.4919128417969 7.89227294921875 321.288818359375 5.34136962890625 305.8926391601562 3.635101318359375 C 290.1142272949219 1.886627197265625 273.89990234375 1.000030517578125 257.6999816894531 1.000030517578125 M 257.6999816894531 3.0517578125e-05 C 389.7764892578125 3.0517578125e-05 498.6461486816406 58.06761169433594 513.6342163085938 132.8799438476562 C 514.802001953125 138.7081146240234 664.6567993164062 152.4943695068359 664.6567993164062 158.4831237792969 C 664.6567993164062 180.2752075195312 507.4801635742188 193.1072082519531 493.25048828125 211.7818603515625 C 453.0931396484375 264.4837036132812 362.7348937988281 301.2077026367188 257.6999816894531 301.2077026367188 C 115.376220703125 301.2077026367188 0 233.7801208496094 0 150.6038665771484 C 0 67.4276123046875 115.376220703125 3.0517578125e-05 257.6999816894531 3.0517578125e-05 Z" stroke="none" fill="#707070"/>
  </g>
  <path id="Pfad_69" data-name="Pfad 69" d="M1306.611,536.014l-5.538-7.87-.309-.5.309-.866,9.877-6.985,3.6-2.708.94-.271.971.271.779.745,1.384.946,2.064.485a22.563,22.563,0,0,0,3.39,0h3.434l4.669.531,4.583,2.026,4.639,1.808,4.529,1.005,4.856.553,4.911.789h4.33l14.55,16.507,2.541,9.08-8.225,2.96a19.254,19.254,0,0,1-5.365,0c-2.554-.311-5.706-1.35-8.64-1.919a37.611,37.611,0,0,1-7.185-2.262l-12.84-7.031-7.985-3.459c.276,0-9.214-2.629-9.214-2.629Z" transform="translate(-391.255 -321.789)" fill="#5b3a29" stroke="#707070" stroke-width="1"/>
  <text id="Sie_haben_sich_erfolgreich_als_Tutorer_angemeldet._Ihre_Anfrage_wird_von_unserem_Team_so_bald_wie_möglich_verarbeitet." data-name="Sie haben sich erfolgreich als Tutorer angemeldet. 
Ihre Anfrage wird von unserem Team so bald wie möglich verarbeitet." transform="translate(80.174 94.062)" fill="#707070" font-size="20" font-family="Poppins-Light, Poppins" font-weight="300"><tspan x="0" y="21">Sie haben sich erfolgreich als Tutorer </tspan><tspan x="0" y="51">angemeldet. </tspan><tspan x="0" y="81">Ihre Anfrage wird von unserem Team </tspan><tspan x="0" y="111">so bald wie möglich verarbeitet.</tspan></text>
</svg>


     </div>



      <footer>
        <div class="container">
            <h4>Kontaktieren Sie Uns</h4>
            <p><strong>Email:</strong> Einfügen! </p>
            <div class="follow">
                <h4>Folgen Sie uns </h4>
                <div class="icon">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-tiktok"></i>
                </div>
            </div>
        </div>

        <div class="container">
            <h4>Über Uns</h4>
            <a href="#">Unsere Geschäfte</a>
            <a href="#">Rechtliches & Datenschutz</a>
            <a href="#">FAQ</a>
        </div>

        <div class="container">
            <h4>Mein Account</h4>
            <a href="#">Sign In</a>
            <a href="#">Sign Up</a>
            <a href="#">Hilfe</a>
        </div>


        <div class="copyright">
            <p>© 2023 KamUni - Alle Rechte vorbehalten</p>
        </div>

    </footer>








</body>
</html>