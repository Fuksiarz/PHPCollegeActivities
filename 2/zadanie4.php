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
                <input type="text" name="liczba">
            </div>

            <input type="submit" value="licz" name="jest">
        </div>

    </form>

    <?php
    if(isset( $_POST['liczba']))
    $value = $_POST['liczba'];


    function czyPierwsza($x)
    {
        if ($x > 1) {
            $iter = 0;
            $tru = true;
            for ($i = 2; $i < $x; $i++) {
                $iter++;

                if ($x % $i == 0) {
                    $tru = false;
                    break;
                }
            }
            printf("Ilość iteracji: %s</br>", $iter);
            if ($tru) {

                echo("to liczba pierwsza!");
            } else

                echo "to nie jest liczba pierwsza!";


        }else echo "to nie jest liczba pierwsza!";
    }

    if ((is_int($value) || ctype_digit($value)) && (int)$value > 0) {
        printf("%s Jest całkowita dodatnia</br>", $value);
        if ($value == 2) {
            echo("to liczba pierwsza!");
        } else {
            czyPierwsza($value);
        }
    } else echo "Nie jest całkowita dodatnia";


    ?>
</fieldset>


</body>
</html>
