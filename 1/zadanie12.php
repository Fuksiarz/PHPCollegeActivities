<?php
$macierz1=array(array (1,2,3),array(4,5,6),array (7,8,9),array (10,11,12),array (12,13,14),array (15,16,17),array (18,19,20),array (21,22,23));
$macierz2=array();
$dluosc1=sizeof($macierz1);
$dluosc2=sizeof($macierz2);
$m=3;
$n=3;
for($i=0;$i<$m;$i++){

    for($j=0;$j<$n;$j++){

        printf("macierz1:[%d][%d]= %d<br/> ",$i,$j, $macierz1 [ $i ][ $j ]);
    }

}
echo ("<br/>");
for($i=0;$i<$m;$i++){

    for($j=0;$j<$n;$j++){

        $macierz2 [ $i ][ $j ] = $macierz1 [ $j ][ $i ];
        printf("macierz2:[%d][%d]= %d<br/> ",$i,$j, $macierz2 [ $i ][ $j ]);
    }

}
