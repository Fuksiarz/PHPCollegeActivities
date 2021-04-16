<?php

session_start();
$_SESSION['ilosci'] = $_POST['ilosc'];
$_SESSION['imie'] = $_POST['imie'];
$_SESSION['nazwisko']= $_POST['nazwisko'];
$_SESSION['adres'] = $_POST['adres'];
$_SESSION['karta']= $_POST['nrKarty'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['dataP'] = $_POST['dataP'];
$_SESSION['dataO']= $_POST['dataO'];
$dziecko = $_POST['dziecko'];


//    for($i=0;$i<$ilosc;$i++){
//        $imie.$i=$_POST['imie'+$i];
//
//
//    }
//

if (isset($dziecko)) {
    $dziecko = "tak";
} else $dziecko = "nie";
if (!empty($_POST['atrybuty'])) {
    $selected="tak";


}else $selected="brak";

echo("<!DOCTYPE html>
            <html lang=\"en\">
            <head>
            <meta charset=\"UTF-8\">
            </head>
            <body>
            <fieldset>
            <form method='post' action='podzad2.php'>
            <header><h1>Już wprowadzone:</h1>
            </header>
            
            <ul style='font-size:24px'>");


echo("
                
                </br>
                <li>Numer karty:" .$_SESSION['karta'] . " </li> <li>email:".$_SESSION['email']." </li> 
                <li>data przyjazdu: ".$_SESSION['dataP'].", data odjazdu: ".$_SESSION['dataO']."</li>
                <li>łóżko dla dziecka:$dziecko</li>
                <li>dodatkowe atrybuty:$selected</li>
                <li>całkowita liczba osób:".$_SESSION['ilosci']."</li>
            </ul>
            </body>
            </html>");

echo ("<h1>Podaj dodatkowe dane:</h1>");
if($_SESSION['ilosci']>1) {
    for ($i = 1; $i < $_SESSION['ilosci']; $i++) {

        echo("<div>Dane dodatkowego miejsca rezerwacji $i :</div><input type=\"text\" placeholder=\"Imie\" name=\"imie$i\" required>
                    <input type=\"text\" placeholder=\"Nazwisko\" name=\"nazwisko$i\" required>
                    <input type=\"text\" placeholder=\"Adres\" name=\"adres$i\" required></br>");


    }
    echo("<input type=\"submit\" value=\"Prześlij\" name=\"send\">
            </fieldset>
            </form>");

}


?>