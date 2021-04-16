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
    if(isset($_POST['pierwsza'])){
        $first = $_POST['pierwsza'];
    }
    if(isset($_POST['druga'])){
        $sec = $_POST['druga'];
    }


    $cz1 = $_POST['tu'] ?? null;



    switch ($cz1) {
        case'+':
            echo $first + $sec;
            break;

        case'-':
            echo $first - $sec;
            break;


        case'*':
            echo $first * $sec;

            break;

        case'/':
            if ($sec != 0)
                echo $first / $sec;
            else echo("nie dziel przez 0!");
            break;


    }

    ?>
</fieldset>


</body>
</html>
