<?php


echo("podaj liczbę od 1 do 12<br/>");
$liczba=1;
switch($liczba)
{
    case 1:
        echo("Styczeń 31 dni");
        break;
    case 2:
        echo("Luty 29 dni");
        break;
    case 3:
        echo("Marzec 31 dni");
        break;
    case 4:
        echo("kwiecień 30 dni");
        break;
    case 5:
        echo("Maj 31 dni");
        break;
    case 6:
        echo("Czerwiec 30 dni");
        break;
    case 7:
        echo("Lipiec 31 dni");
        break;
    case 8:
        echo("Sierpień 31 dni");
        break;
    case 9:
        echo("Wrzesień 30 dni");
        break;
    case 10:
        echo("Październik 31 dni");
        break;
    case 11:
        echo("Listopad 30 dni");
        break;
    case 12:
        echo("Grudzień 31 dni");
        break;
    default:
        echo("Nieprawidłowe dane");
}