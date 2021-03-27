<?php

    $a = 3;
    $b = 4;
    $c = 5;

    $typeA = gettype($a);
    $typeB = gettype($b);
    $typeC = gettype($c);

try {
    if ((($a < 0) || ($b < 0) || ($c < 0)) || (($typeA == "string") || ($typeB == "string") || ($typeC == "string"))) {
        throw new TypeError("BŁĄD");
    } else {

        if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
            echo("Z tych boków da się zbudować trójkąt!");

        } else {
            echo("Z tych boków nie da się zbudować trójkąta!");
        }

    }

} catch (TypeError $e) {
    echo $e->getMessage();
}