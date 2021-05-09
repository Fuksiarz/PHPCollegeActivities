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
                <h>1 liczba</h>
                <input type="number" name="pierwsza">
            </div>
            <div>
                <h>2 liczba</h>
                <input type="number" name="druga">
            </div>


        </div>

        <div>

            <div>
                <input type="radio" name="tu" value="+">
                <label>Dodawanie</label>
                <input type="radio" name="tu" value="-">
                <label>Odejmowanie</label>
                <input type="radio" name="tu" value="*">
                <label>Mnożenie</label>
                <input type="radio" name="tu" value="/">
                <label>Dzielenie</label>
            </div>

        </div>
        <div>

            <input type="submit" value="licz">
        </div>

    </form>

    <?php
    require "funkcjePodZad1.php";
    if(isset($_POST['pierwsza'])){
      $a = $_POST['pierwsza'];
    }
    if(isset($_POST['druga'])){
      $b = $_POST['druga'];
    }

    $cz1 = $_POST['tu'] ?? null;

    switch ($cz1) {
        case'+':

            dodawanie($a,$b);
            break;

        case'-':
            odejmowanie($a,$b);
            break;


        case'*':
            mnozenie($a,$b);

            break;

        case'/':
            dzielenie($a,$b);
            break;
    }

    ?>
</fieldset>


</body>
</html>
