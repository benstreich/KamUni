<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rechnung</title>
    <style>
        /* CSS styling for the invoice email */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }
        
        h2 {
            color: #333333;
        }
        
        p {
            color: #555555;
            margin-bottom: 10px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
        }
        
        th {
            background-color: #f9f9f9;
        }
        
        tfoot td {
            background-color: #f9f9f9;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Rechnung für {{$name}} {{$vorname}}</h2>
    
        <?php 

            if($anrede == 'Herr') $anredeprefix = 'Lieber';
            else if ($anrede == 'Frau') $anredeprefix = 'Liebe';
        ?>


        <br>
    <p>{{$anredeprefix}} {{ $anrede }} {{$name}}</p>
    
    <p>Hier finden sie ihre Rechnung für ihre kürzliche Buchung:</p>
    
    <table>
        <thead>
            <tr>
                <th>Ihre Daten</th>
                <th>Tutor Daten</th>
                <th>Ihre Buchung</th>
                <th>Ihre Mitteilung</th>
                <th>Total</th>
            </tr>
        </thead>
           <tr>
               <th>Name: {{$name}} <br>
   Vorname: {{$vorname}} <br>
   Addresse: {{$addresse}} <br>
   Email: {{$email}} <br>

</th>
               <th>Name: {{$teacher_nachname}} <br>
   Vorname: {{$teacher_vorname}} <br></th>
               <th>
   Fach: {{$fach}} <br>
   Datum: {{$datum}} <br>
   Zeit: {{$zeit}} <br>
 </th>
               <th>{{$mitteilung}} <br></th>
               <th>{{$preis}} CHF</th>

           </tr>
       
    </table>
    <br> <br>
    <p>Bitte überweisen sie die Rechnung innert 30 Tagen</p>
    
    <p>Wir danken ihnen für ihre Buchung und für die Benützung unserer Webseite</p>
    
    <p>Liebe Grüsse,</p>
    <p>Ihr KamUni Team</p>
</body>
</html>

