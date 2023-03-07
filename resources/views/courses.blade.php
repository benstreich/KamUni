<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KamUni</title>
</head>

<body>
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
            animation-duration: 4s;
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
            justify-content: space-around;
        }

        .box {
            width: calc(33.33% - 20px);
            height: 200px;
            margin: 10px;
            float: left;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 5px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
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
            height: auto;
            display: block;
            margin-bottom: 10px;
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


        @media (max-width: 768px) {
            .box {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .box {
                width: 100%;
            }
        }
    </style>


    <div class="headerclass">

        <div class="svgclass">
            <svg xmlns="http://www.w3.org/2000/svg" width="332.35" height="163.911" viewBox="0 0 332.35 163.911">
                <path id="Pfad_52" data-name="Pfad 52" d="M564.987,49.572s-93.222-59.626-134.828,57.665C426.023,118.9,425.9,140.58,425.9,140.58a56.159,56.159,0,0,0-.638,8.81c.022.488-.046,1.172,0,1.61-.111.925.083,1.577,0,2.5-4.662,51.571,40.3,49.263,59.014,35a1.9,1.9,0,0,0,.8-.765c.135-.242.412-.421.624-.729a3.312,3.312,0,0,0,.5-.926c.127-.42.347-1.109.513-1.684.047-.164.186-.226.223-.48a1.939,1.939,0,0,1,.19-.572c.129-.4.675-2.069.826-2.529a12.7,12.7,0,0,0,.885-5.708,64.8,64.8,0,0,0-.968-8.231,26.606,26.606,0,0,0-3.349-8.833l-1.654-2.029-2.819-2.17-2.1-1.209-2.152-.811-2.457-.449-2.159-.37-3.864-.188s-3.218-.016-5.867.188a27.415,27.415,0,0,0-4.812.818l-2,1.028-1.388,1.184-1.485,1.96-1.439,2.2-1.259,2.3-1.424,2.839-.666,2.278-.2,1.893a32.372,32.372,0,0,0,0,5.327c.089,1,.037,1.895.2,2.857a19.541,19.541,0,0,0,.786,2.987l1.98,2.219,1.684,1.961,2.239,1.6,2.794.819,3.072.943h5.682l3.183-.943,2.782-1.939,4.084-3.184,1.388-1.48.648-1.609.833-1.965V172.83l-.185-4.679-.648-2.182-.648-1.424-1.154-1.211-1.093-1.009-1.7-.794h-7.178l-3,.444-2.11,1.36L459.2,164.9,458.14,166.5l-.516,1.467-.2,3.01v2.189l.2,1.584.286.462.44.164h.326l.52-.46,1.1-1.751,1.073-2.189,1.417-1.535,1.324-1.295,1.6-.7h1.518l1.721.366,1.758.61.469,2.552v3.773l-.469,1.609-1.018,1.165-1.8,1.147-2.683.971-3.091.185-3.308-.415-1.392-1.406-.963-2.909a21.347,21.347,0,0,1-.589-4.12,31.43,31.43,0,0,1,.156-3.706l.432-1.665.607-1.871,1.566-1.766,2.42-1.655,3.061-1.285,1.908-.265h2.733l4.343.265,3.174,2.011,2.526,2.289,1.647,4.119.239,2.345.224,2.2v2.265l-.2,1.425-.26,1.378-.739,1.359-.908,1.73-2.147,2.7-1.9,1.821-2.055,1.887-3,1.167-5.579.905H458.35l-6.111-.905-3.98-2.117-3.152-2.758-1.7-2.446L442,176.8l-.449-2.044-2.82-23.385.625-12.443,2.1-8.127,7.252-8.947,2.1-2.594s1.929-1.438,3.387-2.367a33.6,33.6,0,0,1,3.165-1.739l4.941-2.256,2.848-1.587.421-.147.455-.127.361.127.24.147.4.549.412.7.369.687.264.722.279.67.178.472.158.381.137.32.18.22.257.115.6.249.944.446,1.1.541.306.166.168.088.243.113.231.16.211.066h.25l.277-.137.137-.2.137-.254,1.118-2.339.421-.348.566-.247.58.247,6.921,5.39.849.7.21.547-.21.552-1.922,2.53-.74,1.03-.334.638v.362l.334.145,6.878-1.639,4.629-.983.638-.49.515-.686v-.907l.3-10.714v-1l.436-.809.613-.711,1.079-.441,13.773-.961,21.528-1.8,14.3-3.89,18.644,14.907,11.972,4.315h1.179l1.172-.467,1.588-1.083,1.572-1.116,1.751-1.648-1.981-5.389-.45-5.619.45-3.157,1.52.563,3.753.344h10.915l10.29-.344,7.222-2.64,2.724-1.585,2.155-1.341,5.245-4.185,2.561-2.519,2.108-2.567.5-2.56v-2.09l-.5-2.215L624.17,67.277l-4.677-9.888-1.3-1.417-1.626-1.212s-.767-.18-2.14-.362A75.041,75.041,0,0,1,604.1,52.45a37.941,37.941,0,0,1-9.883-4.157L576.959,37.02l-1.118-.263-1.375-.177-1.632.268-.917.439-.192.092-.706.654-1.111,1.432-1.029,1.948-1.4,3.918-.788,2.5-.471,1.467Z" transform="translate(-345.165 -33.918)" fill="rgba(26,214,32,0.87)" stroke="#707070" stroke-width="1" />
                <path id="Pfad_53" data-name="Pfad 53" d="M186.069,273.1H182.89l-26.777,24.352-15.624,6.788L126.966,306.5H119.7l-7.357-.355-7.3.355.17,2.228v1.756l.929,2.191,1.088,2.917,11.819-1.088,15.249-.434,16.217-1.562h14.116l16.594,6.627,16.729,3.933a38.2,38.2,0,0,1,3.933,1.4h5.064v-2.748l-5.711-1.4-9.7-2.532-10.317-3.718-12.041-6.034-3.556-1.536h-9.509l3.206-3.852,25.322-23.975c0-.054,1.428-1.993,1.428-1.993l.573-1.717Z" transform="translate(124.904 -233.188)" fill="#5b3a29" stroke="#707070" stroke-width="1" />
                <path id="Pfad_54" data-name="Pfad 54" d="M894.847,479.73l-10.937-8.674-6.529.238-6.675.479-6.2.537-6.726.276-7.952.406-6,.575-6.632.638-11.466.408-.294,10.725,5.027-1.5,6.733-1.364,7.381-.916,21.6-.916,14.062-.916Z" transform="translate(-676.215 -397.676)" fill="#5b3a29" stroke="#707070" stroke-width="1" />
                <path id="Pfad_55" data-name="Pfad 55" d="M1341.957,528.992l3.235-4.992.18-.318-.18-.549-5.77-4.43-2.1-1.717-.549-.172-.567.172-.455.472-.808.6-1.206.308a12.158,12.158,0,0,1-1.981,0h-2.006l-2.728.337-2.678,1.285-2.71,1.147-2.646.638-2.837.351-2.869.5h-2.53l-8.5,10.47-1.484,5.759,4.805,1.877a10.371,10.371,0,0,0,3.135,0c1.492-.2,3.334-.857,5.047-1.217a20.777,20.777,0,0,0,4.2-1.435l7.5-4.46,4.665-2.194c-.161,0,5.383-1.668,5.383-1.668Z" transform="translate(-1205.97 -436.293)" fill="#5b3a29" stroke="#707070" stroke-width="1" />
                <g id="Ellipse_13" data-name="Ellipse 13" transform="translate(232.664 23.528)" fill="rgba(184,235,233,0.77)" stroke="#707070" stroke-width="1">
                    <circle cx="9.798" cy="9.798" r="9.798" stroke="none" />
                    <circle cx="9.798" cy="9.798" r="9.298" fill="none" />
                </g>
                <path id="Pfad_51" data-name="Pfad 51" d="M1726.11,550.955,1724.9,554.9l-.4,2.4-.4,2.571-.433,2.121v1.491l-.373,1.337-8.069.537-10.018.354-7.937.812-16.22,1.575h-14.725l-9.3.573h-8.991l-2.77-1.158-.926-2.156V560.6l.926-3.994,1.29-3.376,4.067-1.5,5.961-.184,9.7.184h10.88l13.885-.6h16.645Z" transform="translate(-1643.834 -465.422)" fill="#5b3a29" stroke="#707070" stroke-width="1" />
                <g id="Ellipse_14" data-name="Ellipse 14" transform="translate(238.953 29.761)" fill="rgba(35,54,231,0.22)" stroke="#707070" stroke-width="1">
                    <ellipse cx="3.563" cy="3.563" rx="3.563" ry="3.563" stroke="none" />
                    <ellipse cx="3.563" cy="3.563" rx="3.063" ry="3.063" fill="none" />
                </g>
            </svg>
        </div>

        <div class="nav">

            <div class="headerelement">Tutoring uni</div>
            <div class="headerelement">Kurse suchen</div>
            <div class="headerelement">Über uns</div>

        </div>
    </div>

    <div class="container-boxes">

        <div class="box">
            <img src="bild1.jpg" alt="Bild 1">
            <h3>Box 1</h3>
            <p>Text für Box 1</p>
        </div>
        <div class="box">
            <img src="bild2.jpg" alt="Bild 2">
            <h3>Box 2</h3>
            <p>Text für Box 2</p>
        </div>
        <div class="box">
            <img src="bild3.jpg" alt="Bild 3">
            <h3>Box 3</h3>
            <p>Text für Box 3</p>
        </div>
        <div class="box">
            <img src="bild4.jpg" alt="Bild 4">
            <h3>Box 4</h3>
            <p>Text für Box 4</p>
        </div>
        <div class="box">
            <img src="bild5.jpg" alt="Bild 5">
            <h3>Box 5</h3>
            <p>Text für Box 5</p>
        </div>

    </div>







</body>

</html>