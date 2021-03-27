<?php



$l1=3;
$l2=3;
$l3=3;

if ($l1>= $l2 & $l2 >= $l3) {
    echo("od najmniejszej do najwiekszej: $l3, $l2, $l1<br/>");
    echo("od najwiekszej do najmniejszej: $l1, $l2, $l3<br>");

}
elseif($l1>= $l3 & $l3 >= $l2) {


    echo("od najmniejszej do najwiekszej: $l2, $l3, $l1<br/>");
    echo("od najwiekszej do najmniejszej: $l1, $l3, $l2<br>");
}
elseif($l2>=$l3 && $l3>=$l1){

    echo("od najmniejszej do najwiekszej: $l1, $l3, $l2<br/>");
    echo("od najwiekszej do najmniejszej: $l2, $l3, $l1<br>");
}
elseif($l2>=$l1 && $l1>=$l3){
    echo("od najmniejszej do najwiekszej: $l2, $l1, $l3<br>");
    echo("od najwiekszej do najmniejszej: $l3, $l1, $l2<br/>");
}

elseif($l3>=$l1 && $l2>=$l1){
    echo("od najmniejszej do najwiekszej: $l1, $l2, $l3<br>");
    echo("od najwiekszej do najmniejszej: $l3, $l2, $l1<br/>");
}
elseif($l3>=$l2 && $l1>=$l2){
    echo("od najmniejszej do najwiekszej: $l2, $l1, $l3<br>");
    echo("od najwiekszej do najmniejszej: $l3, $l1, $l2<br/>");
}


