<?php

function dodawanie($a,$b){
  echo $a + $b;

}
function odejmowanie($a,$b){
  echo $a - $b;
}
function mnozenie($a,$b){
  echo $a * $b;
}
function  dzielenie($a,$b){
  if ($b != 0)
    echo $a / $b;
  else echo("nie dziel przez 0!");

}
?>
