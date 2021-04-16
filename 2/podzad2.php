
<?php

session_start();

    echo("<!DOCTYPE html>
            <html lang=\"en\">
            <head>
            <meta charset=\"UTF-8\">
            </head>
            <body>
            <fieldset>
            <form method='post'>
            <header><h1>Proszę potwierdzić dane dodatkowych osób:</h1>
            </header>
            
            <ul style='font-size:24px'>");
//$imie = $_POST['imie'];
//
//$nazwisko = $_POST['$nazwisko'];
//$adres = $_GET['$adres'];
//$karta = $_GET['$nrKarty'];
//$email = $_GET["email"];
//$dataP = $_GET['dataP'];
//$dataO = $_GET['dataO'];
//$dziecko = $_GET['dziecko'];
//$ilosci=$_GET['ilosci'];
//$_SESSION['ilosci']
//$_SESSION['imie']
//$_SESSION['nazwisko']
//$_SESSION['adres']
//$_SESSION['karta']
//$_SESSION['email']
//$_SESSION['dataP']
//$_SESSION['dataO']


    for($i=1;$i<$_SESSION['ilosci'];$i++){
        $_SESSION["imie".$i]=$_POST['imie'.$i];


    }

if (isset($dziecko)) {
    $dziecko = "tak";
} else $dziecko = "nie";
if (!empty($_POST['atrybuty'])) {
    $selected="tak";


}else $selected="brak";
        for($i=1;$i<$_SESSION['ilosci'];$i++){
            $imiep=$_POST["imie$i"];
            $nazwiskop=$_POST["nazwisko$i"];
            $adresp=$_POST["adres$i"];
            echo("<div>

                        <li >Pan(/i) $imiep $nazwiskop </li>
                        <li>zamieszkał(/a) na ulicy $adresp</li>
                        <li style='list-style-type: none'>---------------------------------</li>
                    <div>
                  ") ;
        }
    echo("      </br><h2>Dane zamawiającego</h2>
                </br>
                <li >Pan(/i)". $_SESSION['imie'] . $_SESSION['nazwisko']." </li>
                <li>zamieszkał(/a) na ulicy ".$_SESSION['adres']."</li>
                <li>Numer karty: ".$_SESSION['karta']."</li> <li>email:".$_SESSION['email']." </li>
                <li>data przyjazdu:".$_SESSION['dataP']." , data odjazdu:". $_SESSION['dataO']."</li>
                <li>łóżko dla dziecka:$dziecko</li>
                <li>dodatkowe atrybuty:$selected</li>
                <li>całkowita liczba osób:".$_SESSION['ilosci']."</li>
            </ul>
            </form>
            </fieldset>
            </body>
            </html>");






?>
