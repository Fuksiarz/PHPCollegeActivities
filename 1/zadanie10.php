<?php
$liczba=15;
$b=0;

for($i=0;$i<$liczba;$i++){


    for($j=0;$j<$i+1;$j++){
        echo("*");
    }
    echo("<br/>");
}
for($i=$liczba;$i>0;$i--){


    for($j=0;$j<$i;$j++){
        echo("*");
    }
    echo("<br/>");
}

//for($i=$liczba;$i>0;$i--){
//
//
//    for($j=$i;$j>0;$j--){
//
//        echo(str_repeat("&nbsp;", $j));
//        echo("*");
//    }
//    echo("<br/>");
//}
for($i=1;$i<=$liczba+1;$i++){


    for($j=0;$j<$i;$j++){
        if($j!=0)
        echo("&nbsp;&nbsp;");
    }
    for($z=$i;$z<$liczba+1;$z++){

        echo("*");

    }
    if($i<=$liczba-1)
    echo("<br/>");
}
for($i=$liczba+1;$i>0;$i--){


    for($j=0;$j<$i;$j++){
        if($j!=0)
            echo("&nbsp;&nbsp;");
    }
    for($z=$i;$z<$liczba+1;$z++){

        echo("*");

    }
    echo("<br/>");
}




//    str_repeat('&nbsp;', $i);