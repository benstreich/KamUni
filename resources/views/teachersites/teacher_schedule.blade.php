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
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>




<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
const date = new Date();

let day = date.getDate();
let month = date.getMonth() + 1;
let year = date.getFullYear();

// This arrangement can be altered based on how we want the date's format to appear.
let currentDate = `${day}-${month}-${year}`;</script>




  <style>

   body{
   background-color: #d6edd4;
   font-family: "Poppins", sans-serif;
   margin: 0;
   padding: 0;
}
a  { text-decoration: none; }

.timetable {
  display: table;
  width: 80%;
  table-layout: fixed;
}

.header {
  display: table-row;
}

.row {
  display: table-row;
}

.cell {
  display: table-cell;
  border: 1px solid black;
  padding: 5px;
  width: 20%; /* set the width to 20% to make all cells equally large */
}

.time {
  display: table-cell;
  border: 1px solid black;
  padding: 5px;
  width: 20%; /* set the width to 20% to make all cells equally large */
}

.cell:first-child {
  width: auto; /* set the first cell width to auto to adjust to the content */
}

.time:first-child {
  width: auto; /* set the first cell width to auto to adjust to the content */
}





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
  height: 800px;
  justify-content: center;
  margin-top: 15px;
  margin-bottom: 50px;
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

.footer{

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


      <div class="timetable">
  <div class="header">
    <div class="time"></div>
    <div class="time">Zeit</div>
    <div class="time">Montag</div>
    <div class="time">Dienstag</div>
    <div class="time">Mittwoch</div>
    <div class="time">Donnerstag</div>
    <div class="time">Friday</div>
    <div class="time">Samstag</div>
  </div>
  <div class="row">
    <div class="time">9:00am - 10:00am</div>
    <div class="time"></div>
    <div class="cell" data-date="" id="currentDate"></div>
    <div class="cell" data-date="22-03-2023"></div>
    <div class="cell" data-date="23-03-2023"></div>
    <div class="cell" data-date="24-03-2023"></div>
    <div class="cell" data-date="25-03-2023"></div>
    <div class="cell" data-date="26-03-2023"></div>
    <div class="cell" data-date="27-03-2023"></div>
  </div>
  <div class="row">
    <div class="cell-time">10:00am - 11:00am</div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
  </div>
  <div class="row">
    <div class="cell-time">11:00am - 12:00pm</div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
  </div>
  <div class="row">
    <div class="cell-time">12:00pm - 1:00pm</div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
  </div>
  <div class="row">
    <div class="cell-time">1:00pm - 2:00pm</div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
  </div>
  <div class="row">
    <div class="cell-time">14:00 - 15:00</div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
  </div>
  <div class="row">
    <div class="cell-time">15:00 - 16:00</div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
  </div>
  <div class="row">
    <div class="cell-time">16:00 - 17:00</div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
  </div>
  <div class="row">
    <div class="cell-time">17:00 - 18:00</div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>

  </div>
  <div class="row">
    <div class="cell-time">18:00 - 19:00</div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
    <div class="cell"></div>
  </div>
</div>


     </div>


  <div class="footercontainer">
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

    </div>






</body>

<script>
// get all cell elements
const cells = document.querySelectorAll('.cell');
// add click event listener to each cell
cells.forEach(cell => {
  cell.addEventListener('click', function() {
    const date = this.getAttribute('data-date');
    

    Swal.fire({
  title: 'Do you want to save the changes?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: 'Save',
  denyButtonText: `Don't save`,
}).then((result) => {

  if (result.isConfirmed) {

    window.location.href = "/teacher_schedule/save/"+ date.toString();

    
  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
  }

  console.log(date);

})




  });
});

var today = new Date();
    var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
    document.getElementById("currentDate").data-date = date;


</script>
</html>