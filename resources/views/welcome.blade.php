<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KamUni</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
</head>


<body>
    <style>
        * {
            text-decoration: none;
            list-style: none;
            font-family: "Poppins", sans-serif;
          
        }

        body{
            margin: 0;
            padding: 0;
            background-color: #d6edd4;
        }


        .contentclass {
            display: flex;
            width: 100%;
            height: 500px;
            justify-content: flex-end;
            padding-top: 15px;
            background-color: #d6edd4;
        }

        .camellot{
            animation-name: camelion2;
            animation-duration: 4s;
        }

        @keyframes camelion2 {
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

        /*Footer*/
         footer {
            background-color: #333;
            color: white;
        }

        .footer-info{
            width: 90%;
            margin: 0 auto;
            display: flex;
            padding: 45px 0;
        }

        .footer-info h2{
          margin-bottom: 20px;
        }

        

        .about, .contact{
          width: 40%;
          padding: 0 15px;
        }

        .links{
          width: 20%;
          padding: 0 15px;
        }


        .links ul li{
          margin-bottom: 15px;
          font-size: 15px;
        }

        .links ul li a{
            color: white;
        }

       
        .links ul li a:hover{
          color: black;
        }


        .socials{
          margin-top: 30px;
        }

        .socials ul{
          display: flex;
        }

        .socials ul li a{
          display: inline-block;
          margin-right: 30px;
          width: 40px;
          height: 35px;
          background-color: transparent;
          border: 1px solid white;
          text-align: center;
          padding-top:10px;
          color: white;
        }

        .socials ul li a:hover{
          background-color: white;
          color: black;
        }


        .contact ul li{
          display: flex;
          align-items: center;
          margin-bottom: 15px;
        }

       


        @media  screen and (max-width: 992px) {
            .about, .contact{
                width: 35%;
            }

            .link{
                width: 30%;
            }
        }

        @media screen and (max-width: 767px){
            .about, .link, .contact{
                width: 100%;
                margin-right: 30px;
            }

            .footer-info{
                flex-direction: column;
            }
        }

        img{
            width: 200px;
            height:200px;
        }





    </style>


@include('header_templates.header_unsigned_in')

    <div class="contentclass">

    <div class="camellot">
        <svg id="camellot" xmlns="http://www.w3.org/2000/svg" width="1097.213" height="354.1" viewBox="0 0 1097.213 354.1">
            <path id="Pfad_12" data-name="Pfad 12"
                d="M545.88,62.086s170.2-108.861,246.16,105.28c7.551,21.287,7.774,60.874,7.774,60.874s1.46,9.519,1.164,16.084c-.04.891.084,2.14,0,2.939.2,1.688-.152,2.879,0,4.565,8.512,94.155-73.578,89.941-107.743,63.892a3.468,3.468,0,0,1-1.457-1.4c-.247-.442-.752-.769-1.139-1.33a6.043,6.043,0,0,1-.92-1.69c-.233-.767-.633-2.025-.937-3.075-.087-.3-.339-.413-.408-.876a3.544,3.544,0,0,0-.346-1.044c-.235-.729-1.232-3.778-1.508-4.618-1.445-4.4-1.942-6.953-1.615-10.422.515-5.48.737-10.674,1.768-15.028a48.572,48.572,0,0,1,6.115-16.127l3.02-3.705,5.148-3.962,3.843-2.208,3.929-1.481,4.485-.819,3.941-.675,7.055-.343s5.875-.03,10.711.343a50.056,50.056,0,0,1,8.785,1.494l3.649,1.877,2.534,2.161,2.711,3.579,2.628,4.019,2.3,4.2,2.6,5.184,1.216,4.158.373,3.456a59.1,59.1,0,0,1,0,9.725c-.162,1.82-.068,3.459-.373,5.217a35.681,35.681,0,0,1-1.435,5.454l-3.615,4.052-3.075,3.579-4.088,2.929-5.1,1.494-5.609,1.722H728.044l-5.811-1.722-5.08-3.54-7.456-5.814-2.534-2.7-1.183-2.938-1.521-3.587v-4.146l.338-8.543,1.182-3.985,1.183-2.6,2.108-2.212,1.995-1.842,3.1-1.45h13.105l5.474.81,3.852,2.482,2.23,2.853,1.929,2.937.943,2.677.37,5.495v4l-.37,2.893-.523.844-.8.3h-.6l-.95-.839-2.009-3.2-1.96-4-2.586-2.8-2.418-2.364-2.921-1.276h-2.771l-3.142.669-3.21,1.114-.856,4.66v6.889l.856,2.938,1.858,2.127,3.277,2.094,4.9,1.773,5.643.338,6.04-.757,2.541-2.568,1.758-5.31a38.973,38.973,0,0,0,1.075-7.523,57.361,57.361,0,0,0-.286-6.765l-.789-3.039-1.109-3.416-2.859-3.225-4.419-3.022-5.588-2.347-3.483-.484h-4.99l-7.929.484-5.795,3.672-4.612,4.18-3.007,7.52-.436,4.282-.409,4.018v4.135l.369,2.6.475,2.516,1.349,2.48,1.658,3.159,3.919,4.93,3.478,3.325,3.753,3.444,5.474,2.131,10.185,1.653h10.519l11.157-1.653,7.267-3.865,5.754-5.035,3.1-4.466,2.579-6.594.82-3.731,5.149-42.7-1.142-22.718-3.826-14.838-13.24-16.335-3.838-4.736s-3.522-2.625-6.183-4.322a61.345,61.345,0,0,0-5.778-3.174l-9.021-4.12-5.2-2.9-.768-.269-.831-.233-.658.233-.439.269-.721,1L724,177.069l-.674,1.253-.483,1.318-.51,1.224-.325.862-.288.7-.25.584-.329.4-.468.209-1.095.454-1.723.815-2.015.989-.558.3-.307.16-.443.207-.421.292-.385.121h-.456l-.507-.249-.25-.371-.25-.463-2.041-4.271-.768-.635-1.034-.45-1.06.45-12.635,9.84-1.55,1.274-.383,1,.383,1.009,3.508,4.619,1.351,1.88.609,1.165v.661l-.609.266-12.557-2.992-8.451-1.795L675.858,197l-.94-1.253v-1.656l-.547-19.56V172.7l-.8-1.477-1.119-1.3-1.97-.805-25.145-1.754-39.3-3.282-26.116-7.1L545.88,184.2l-21.857,7.878H521.87l-2.139-.853-2.9-1.978-2.869-2.038-3.2-3.009,3.617-9.839L515.2,164.1l-.822-5.764-2.775,1.027-6.852.628H484.826l-18.787-.628-13.185-4.819-4.974-2.893-3.934-2.448-9.576-7.641-4.677-4.6-3.848-4.687-.92-4.673v-3.816l.92-4.044,11.982-25.33,8.54-18.053,2.381-2.587,2.968-2.213s1.4-.328,3.906-.661a137,137,0,0,0,18.839-3.556,69.273,69.273,0,0,0,18.044-7.59l31.516-20.582,2.041-.481,2.51-.323,2.979.489,1.674.8.35.167,1.289,1.194,2.029,2.615,1.879,3.557,2.559,7.153,1.44,4.556.86,2.677Z"
                transform="translate(256.594 21.751)" fill="rgba(26,214,32,0.87)" stroke="#707070" stroke-width="1" />
            <path id="Pfad_13" data-name="Pfad 13"
                d="M143.154,273.1h5.8l48.887,44.461,28.526,12.394,24.689,4.131h13.271l13.432-.648,13.331.648-.31,4.068v3.206l-1.7,4-1.987,5.325L265.523,348.7l-27.841-.792-29.608-2.852H182.3l-30.3,12.1-30.542,7.181c0-.3-7.181,2.558-7.181,2.558h-9.246v-5.017l10.427-2.557,17.706-4.623,18.837-6.787,21.984-11.017,6.492-2.8h17.361l-5.853-7.033L145.761,283.28c0-.1-2.607-3.639-2.607-3.639l-1.046-3.135Z"
                transform="translate(492.905 -144.976)" fill="#5b3a29" stroke="#707070" stroke-width="1" />
            <path id="Pfad_14" data-name="Pfad 14"
                d="M825.438,486.892l19.968-15.837,11.92.435,12.187.874,11.312.98,12.279.5,14.518.742,10.959,1.049,12.108,1.164,20.934.745.537,19.582-9.178-2.731-12.293-2.49-13.476-1.672-39.444-1.672L852.1,486.892Z"
                transform="translate(-20.791 -281.828)" fill="#5b3a29" stroke="#707070" stroke-width="1" />
            <g id="Ellipse_3" data-name="Ellipse 3" transform="translate(743.253 98.211)" fill="rgba(184,235,233,0.77)"
                stroke="#707070" stroke-width="1">
                <ellipse cx="17.888" cy="17.888" rx="17.888" ry="17.888" stroke="none" />
                <ellipse cx="17.888" cy="17.888" rx="17.388" ry="17.388" fill="none" />
            </g>
            <g id="Ellipse_4" data-name="Ellipse 4" transform="translate(754.537 109.591)" fill="rgba(35,54,231,0.22)"
                stroke="#707070" stroke-width="1">
                <ellipse cx="6.505" cy="6.505" rx="6.505" ry="6.505" stroke="none" />
                <ellipse cx="6.505" cy="6.505" rx="6.005" ry="6.005" fill="none" />
            </g>
            <path id="Pfad_5" data-name="Pfad 5"
                d="M1644.334,550.955l.637,7.205.213,4.389.212,4.694.228,3.872v2.723l.2,2.441,4.254.981,5.282.646,4.185,1.482,8.552,2.875h7.764l4.9,1.046h4.74l1.46-2.114.488-3.936v-8.7l-.488-7.292-.68-6.163-2.144-2.746-3.143-.336-5.115.336h-5.737l-7.32-1.1h-8.776Z"
                transform="translate(-590.737 -339.539)" fill="#5b3a29" stroke="#707070" stroke-width="1" />
            <g id="Pfad_18" data-name="Pfad 18" fill="#fff">
                <path
                    d="M 269.0657348632812 313.9923400878906 C 250.8297424316406 313.9923400878906 232.6053771972656 312.918701171875 214.8990173339844 310.8011474609375 C 197.6437530517578 308.7377014160156 180.67138671875 305.65869140625 164.4532012939453 301.6497802734375 C 148.5314788818359 297.7141418457031 133.1756591796875 292.8431396484375 118.8121109008789 287.1721496582031 C 104.5882949829102 281.55615234375 91.21365356445312 275.1072387695312 79.05983734130859 268.0043334960938 C 66.91047668457031 260.904052734375 55.88156509399414 253.0922393798828 46.27929306030273 244.785888671875 C 36.59074783325195 236.4046936035156 28.27038383483887 227.4466094970703 21.54956436157227 218.1603393554688 C 14.70983791351318 208.7097930908203 9.457474708557129 198.8219757080078 5.93838357925415 188.7715148925781 C 2.329746961593628 178.46533203125 0.5000197291374207 167.8587036132812 0.5000197291374207 157.2461547851562 C 0.5000197291374207 146.6336059570312 2.329746961593628 136.0269775390625 5.93838357925415 125.7207946777344 C 9.457474708557129 115.6703338623047 14.70983791351318 105.7825164794922 21.54956436157227 96.33197021484375 C 28.27038383483887 87.04570007324219 36.59074783325195 78.08760833740234 46.27929306030273 69.70652008056641 C 55.88156509399414 61.40006256103516 66.91047668457031 53.5882453918457 79.05983734130859 46.48797225952148 C 91.21365356445312 39.38515472412109 104.5882949829102 32.93615341186523 118.8121109008789 27.32024574279785 C 133.1756591796875 21.64915466308594 148.5314788818359 16.77815437316895 164.4532012939453 12.84251880645752 C 180.67138671875 8.833609580993652 197.6437530517578 5.754609107971191 214.8990173339844 3.691154718399048 C 232.6053771972656 1.573609352111816 250.8297424316406 0.4999729692935944 269.0657348632812 0.4999729692935944 C 286.0001220703125 0.4999729692935944 302.9497375488281 1.426791191101074 319.44384765625 3.254609346389771 C 335.5393981933594 5.038336753845215 351.4334716796875 7.705245494842529 366.6846618652344 11.18115520477295 C 381.6599426269531 14.59433650970459 396.2071228027344 18.83079147338867 409.9220275878906 23.77279090881348 C 423.4878234863281 28.66115570068359 436.3965759277344 34.2961540222168 448.28955078125 40.52124404907227 C 460.1480102539062 46.72833633422852 471.1269226074219 53.59006500244141 480.9212951660156 60.91597366333008 C 490.7672119140625 68.280517578125 499.5255737304688 76.19624328613281 506.9532165527344 84.44342803955078 C 514.4778442382812 92.79833984375 520.7271118164062 101.5945205688477 525.527587890625 110.5877914428711 C 530.424560546875 119.7619705200195 533.8798217773438 129.2669677734375 535.7974853515625 138.8386993408203 C 535.942138671875 139.5606994628906 536.93017578125 140.4225158691406 543.1265869140625 141.8276977539062 C 547.1781005859375 142.7464294433594 552.948486328125 143.7863311767578 560.767578125 145.0066986083984 C 575.285400390625 147.2726135253906 594.9357299804688 149.8448791503906 613.939208984375 152.33251953125 C 633.2366333007812 154.8585205078125 653.1911010742188 157.4706115722656 668.1190185546875 159.8021545410156 C 676.1513671875 161.0567016601562 682.1073608398438 162.1290588378906 686.3272094726562 163.0805206298828 C 688.6009521484375 163.5931549072266 690.3714599609375 164.0738830566406 691.5895385742188 164.5093383789062 C 693.186279296875 165.0802154541016 693.4381713867188 165.4333953857422 693.4710693359375 165.4938201904297 C 693.4573974609375 168.1960296630859 690.788818359375 170.9806060791016 685.538818359375 173.7707977294922 C 680.6680297851562 176.3595123291016 673.6632690429688 178.9455108642578 664.1245727539062 181.6766052246094 C 646.3926391601562 186.7534332275391 622.650390625 191.4974212646484 599.6898193359375 196.0853424072266 C 579.5023193359375 200.1190643310547 560.4342651367188 203.9291534423828 545.0176391601562 207.9611511230469 C 536.7178344726562 210.1318817138672 530.2984008789062 212.1558837890625 525.3922729492188 214.1487884521484 C 519.8352661132812 216.4061584472656 516.3074951171875 218.5880584716797 514.6072998046875 220.8193359375 C 504.2385559082031 234.4270629882812 490.5852966308594 247.1093292236328 474.0268249511719 258.5137939453125 C 457.5558471679688 269.8579711914062 438.4556579589844 279.7705078125 417.2570190429688 287.9758911132812 C 373.2855529785156 304.9959716796875 322.0418395996094 313.9923400878906 269.0657348632812 313.9923400878906 Z"
                    stroke="none" />
                <path
                    d="M 269.0656433105469 0.999969482421875 C 250.8494873046875 0.999969482421875 232.6451110839844 2.072418212890625 214.9582824707031 4.1876220703125 C 197.723388671875 6.248687744140625 180.7713623046875 9.323974609375 164.5731201171875 13.32797241210938 C 148.6730346679688 17.25823974609375 133.3385620117188 22.1224365234375 118.9957275390625 27.78524780273438 C 104.7954711914062 33.39187622070312 91.44403076171875 39.82962036132812 79.3121337890625 46.91970825195312 C 67.18927001953125 54.0045166015625 56.18548583984375 61.79824829101562 46.6064453125 70.08460998535156 C 36.9468994140625 78.44052124023438 28.6529541015625 87.37007141113281 21.95465087890625 96.62515258789062 C 15.143310546875 106.0365142822266 9.91339111328125 115.8812408447266 6.4102783203125 125.8860626220703 C 2.8203125 136.1389770507812 1 146.6900634765625 1 157.2461547851562 C 1 167.80224609375 2.8203125 178.3533325195312 6.4102783203125 188.6062469482422 C 9.91339111328125 198.6110534667969 15.143310546875 208.4557800292969 21.95465087890625 217.8671569824219 C 28.6529541015625 227.1222534179688 36.9468994140625 236.0517883300781 46.6064453125 244.4076995849609 C 56.18548583984375 252.6940612792969 67.18927001953125 260.48779296875 79.3121337890625 267.5726013183594 C 91.44403076171875 274.6626892089844 104.7954711914062 281.1004333496094 118.9957275390625 286.7070617675781 C 133.3385620117188 292.369873046875 148.6730346679688 297.2340698242188 164.5731201171875 301.1643371582031 C 180.7713623046875 305.1683349609375 197.723388671875 308.2436218261719 214.9582824707031 310.3046875 C 232.6451110839844 312.4198913574219 250.8494873046875 313.4923400878906 269.0656433105469 313.4923400878906 C 321.9806518554688 313.4923400878906 373.1620178222656 304.5076904296875 417.0764770507812 287.5096130371094 C 438.2388305664062 279.3182373046875 457.3042907714844 269.4241638183594 473.7431945800781 258.10205078125 C 490.2581176757812 246.7276000976562 503.8729248046875 234.0818786621094 514.2096557617188 220.5162353515625 C 517.465087890625 216.2437896728516 527.21435546875 212.1006164550781 544.89111328125 207.4774169921875 C 560.322021484375 203.4417114257812 579.3969116210938 199.6302490234375 599.5918579101562 195.594970703125 C 622.5425415039062 191.0091552734375 646.274658203125 186.2671508789062 663.9869384765625 181.1958770751953 C 673.4916381835938 178.474609375 680.4645385742188 175.9014282226562 685.30419921875 173.3293304443359 C 690.2437744140625 170.7039794921875 692.819091796875 168.1360168457031 692.9645385742188 165.692138671875 C 692.777587890625 165.5525360107422 692.253662109375 165.2437744140625 690.8787231445312 164.7952423095703 C 689.5599975585938 164.3650665283203 687.71435546875 163.8908843994141 685.3929443359375 163.3856964111328 C 681.0700073242188 162.4451599121094 675.0985717773438 161.3885192871094 667.1373901367188 160.155517578125 C 652.3302001953125 157.8621520996094 632.7803955078125 155.3030700683594 613.874267578125 152.8282470703125 C 594.8678588867188 150.3402404785156 575.2142944335938 147.7676086425781 560.6904907226562 145.5007019042969 C 552.8599853515625 144.2786102294922 547.0786743164062 143.2366027832031 543.0159301757812 142.3153381347656 C 536.2128295898438 140.7726135253906 535.487548828125 139.8369750976562 535.3071899414062 138.9369659423828 C 533.399169921875 129.4131622314453 529.9603881835938 119.9542388916016 525.0864868164062 110.8232421875 C 520.3051147460938 101.8657073974609 514.0792236328125 93.10279846191406 506.5816650390625 84.77806091308594 C 499.1757507324219 76.55506896972656 490.4415588378906 68.66142272949219 480.6217651367188 61.31642150878906 C 470.8487548828125 54.00643920898438 459.892578125 47.15896606445312 448.0576782226562 40.9642333984375 C 436.1846618652344 34.74969482421875 423.2969360351562 29.12387084960938 409.7524719238281 24.24325561523438 C 396.0565795898438 19.3079833984375 381.5290222167969 15.07733154296875 366.573486328125 11.668701171875 C 351.3407592773438 8.196868896484375 335.4654846191406 5.53314208984375 319.3887329101562 3.751617431640625 C 302.912841796875 1.92578125 285.9816589355469 0.999969482421875 269.0656433105469 0.999969482421875 M 269.0656433105469 -3.0517578125e-05 C 406.96728515625 -3.0517578125e-05 520.6385498046875 60.62861633300781 536.2877197265625 138.7405242919922 C 537.5070190429688 144.8257904052734 693.9711303710938 159.2200622558594 693.9711303710938 165.4728851318359 C 693.9711303710938 188.2261657714844 529.8623046875 201.6240539550781 515.0050048828125 221.1223449707031 C 473.0765686035156 276.1486206054688 378.7331237792969 314.4923400878906 269.0656433105469 314.4923400878906 C 120.46484375 314.4923400878906 0 244.0907897949219 0 157.2461547851562 C 0 70.40151977539062 120.46484375 -3.0517578125e-05 269.0656433105469 -3.0517578125e-05 Z"
                    stroke="none" fill="#707070" />
            </g>
            <path id="Pfad_69" data-name="Pfad 69"
                d="M1306.869,536.86l-5.782-8.217-.322-.523.322-.9,10.312-7.293,3.759-2.827.982-.282,1.013.282.813.777,1.445.988,2.155.507a23.565,23.565,0,0,0,3.54,0h3.586l4.875.555,4.785,2.116,4.843,1.888,4.729,1.049,5.07.577,5.128.824h4.521l15.192,17.235,2.653,9.481-8.588,3.09a20.1,20.1,0,0,1-5.6,0c-2.667-.325-5.958-1.41-9.021-2a39.268,39.268,0,0,1-7.5-2.361l-13.406-7.342-8.337-3.612c.288,0-9.62-2.745-9.62-2.745Z"
                transform="translate(-351.142 -313.187)" fill="#5b3a29" stroke="#707070" stroke-width="1" />
            <text
                id="Interessiert_an_Nachhilfe_KamUni_ist_der_richtige_Ort_für_Sie._Auch_als_Nachhilfe-Lehrer_können_Sie_sich_anmelden._Kurs_buchen_und_lernen_virtuell_oder_im_Echten_Leben_treffen."
                data-name="Interessiert an Nachhilfe? KamUni ist der richtige Ort für Sie. Auch als Nachhilfe-Lehrer können Sie sich anmelden. Kurs buchen und lernen, virtuell oder im Echten Leben treffen."
                transform="translate(78.825 75.714)" fill="#707070" font-size="22" font-family="Poppins-Light, Poppins"
                font-weight="300">
                <tspan x="0" y="23">Interessiert an Nachhilfe? KamUni ist </tspan>
                <tspan x="0" y="56">der richtige Ort für Sie. Auch als </tspan>
                <tspan x="0" y="89">Nachhilfe-Lehrer können Sie sich </tspan>
                <tspan x="0" y="122">anmelden. Kurs buchen und lernen, </tspan>
                <tspan x="0" y="155">virtuell oder im Echten Leben treffen.</tspan>
            </text>
        </svg>
        </div>
    </div>

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
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="links">
                <h2>Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="/courses">Kurse suchen</a></li>
                    <li><a href="/about_us">Über Uns</a></li>
                </ul>
            </div>
            <div class="contact">
                <h2>Kontakt</h2>
                <ul>
                    <li>Email einfügen</li>
                    <li>Email einfügen</li>
                    <li>Email einfügen</li>
                    <li>Email einfügen</li>
                </ul>
            </div>
        </div>
    </footer>





</body>

</html>
