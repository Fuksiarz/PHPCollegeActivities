<?php
$tab1[]=22;
$tab1[]=4;
$tab1[]="siema";

$tab2[]=4;
$tab2[]=3;
$tab2[]=3;

$mnozenie=0;
$suma=0;
$size=sizeof($tab1);
try {

    for ($i = 0; $i < $size; $i++) {
        if ((is_integer($tab1[$i])==1 && is_integer($tab2[$i])==1)) {

        $mnozenie = $tab1[$i] * $tab2[$i];
        $suma = $mnozenie + $suma;

        }else{
            throw new TypeError("BŁĄD");
            exit();
        }
    }
    echo("iloczyn skalarny podnaych liczb wynosi: $suma<br/>");
    echo("w przypadku gdzie jeden zbiór jest większy nie bierzemy liczb wykracząjacych poza zakres ponieważ mnożenie bedzie dawalo 0");
} catch (TypeError $e) {
    echo $e->getMessage();
}