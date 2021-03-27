<?php
$alp=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
$tekst="Jink cwm, zag veldt, fob qursh pyx";


$lower=strtolower($tekst);
$new_tekst=str_replace(' ','',$lower);
$x=strlen($new_tekst);

for($i=0;$i<25;$i++){

    for($j=0;$j<$x;$j++){

        if($alp[$i]==$new_tekst[$j]){

            break;
        }
        else if (($j==($x-1))&&($alp[$i]!=$new_tekst[$j])){

            echo("false<br/>");
            exit();

        }


    }




}
echo("true");
//$alp=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");