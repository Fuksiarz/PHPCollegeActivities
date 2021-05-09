<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>

</head>
<body>
<fieldset>

    <form method="post" action="">
        <div>
            <div>
                <h>Imie:</h>

                <input type="text" name="pierwsza">
            </div>

            <div>
                <h>Nazwisko:</h>

                <input type="text" name="druga">
            </div>

        </div>
        <div>

            <div>

                <h>Wiek:</h>
                <input type="number" name="wiek">
            </div>

        </div>
        <div>

            <input type="submit" value="zapisz">
        </div>

    </form>
    <?php

    $myfile = fopen('plik.txt', 'a') or die("Unable to open file!");

    if (isset($_POST['pierwsza'])) {
        $a = (' imie: ' . $_POST['pierwsza']);
        fwrite($myfile, $a);
    }
    if (isset($_POST['druga'])) {
        $b = (' nazwisko: ' . $_POST['druga']);
        fwrite($myfile, $b);
    }
    if (isset($_POST['wiek'])) {
        $c = (' wiek: ' . $_POST['wiek'] . "\n");
        fwrite($myfile, $c);
    }

    fclose($myfile);

    ?>
</fieldset>


</body>
</html>

