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
if ($_SESSION['ilosci']) {
    setcookie("ilosci",$_SESSION['ilosci']);
}
if ($_SESSION['imie']) {
    setcookie("imie",$_SESSION['imie']);
}
if ($_SESSION['nazwisko']) {
    setcookie("nazwisko",$_SESSION['nazwisko']);
}
if ($_SESSION['adres']) {
    setcookie("adres",$_SESSION['adres']);
}
if ($_SESSION['karta']) {
    setcookie("karta",$_SESSION['karta']);
}
if ($_SESSION['email']) {
    setcookie("email",$_SESSION['email']);
}
if ($_SESSION['dataP']) {
    setcookie("dataP",$_SESSION['dataP']);
}
if ($_SESSION['dataO']) {
    setcookie("dataO",$_SESSION['dataO']);
}


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
                <li>sprawdzanie ciasteczka \"email\": " .$_COOKIE['email'] . " </li>
                <li>Numer karty: " .$_SESSION['karta'] . " </li> <li>email:".$_SESSION['email']." </li> 
                <li>data przyjazdu: ".$_SESSION['dataP'].", data odjazdu: ".$_SESSION['dataO']."</li>
                <li>łóżko dla dziecka:$dziecko</li>
                <li>dodatkowe atrybuty:$selected</li>
                <li>całkowita liczba osób:".$_SESSION['ilosci']."</li>
            </ul>
            </body>
            </html>");

?>