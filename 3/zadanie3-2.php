
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

if(isset($_POST['send'])){
    if(isset($_POST["dziecko"] )){
        $dziecko="tak";
    }else{
        $dziecko="nie";
    }
    if (!empty($_POST['atrybuty'])) {
        $selected="tak";


    }else $selected="brak";
    $fullData = array(
        $ilosc = $_POST["ilosc"] ?? "",
        $imie = $_POST["imie"] ?? "",
        $nazwisko = $_POST["nazwisko"] ?? "",
        $adres = $_POST["adres"] ?? "",
        $nrKarty = $_POST["nrKarty"] ?? "",
        $email = $_POST["email"] ?? "",
        $dataP = $_POST["dataP"] ?? "",
        $dataO = $_POST["dataO"] ?? "",
        $dziecko,
        $selected);
    echo("

            <header><h1>Już wprowadzone:</h1>
            </header>

            <ul style='font-size:24px'>");

    echo("
                </br>

                <li>całkowita liczba osób: $ilosc </li>
                <li>imie: $imie </li>
                <li>nazwisko: $nazwisko </li>
                <li>adres: $adres</li>
                <li>Numer karty: $nrKarty</li> 
                <li>email: $email </li> 
                <li>data przyjazdu: $dataP, data odjazdu:  $dataO</li>
                <li>łóżko dla dziecka: $dziecko</li>
                <li>dodatkowe atrybuty: $selected</li>
            </ul>

");

    $plik = fopen("zadanko.csv", 'a+') or die("Unable to open file");

    fputcsv($plik,$fullData,';');

    fclose($plik);
}
?>
<form method='post'>
    <input type="submit" name="loadValues" value="Load">
    <?php
    if(isset($_POST['loadValues'])){
    $plik = fopen("zadanko.csv", "r") or die("Unable to open file!");
    echo fread($plik,filesize("zadanko.csv"));
    fclose($plik);
    }
    ?>
</form>


</body>
</html>