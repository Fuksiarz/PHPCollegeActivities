<?php
if (!$connect = mysqli_connect("localhost", "root", "", "zadanie")) {
    echo "mamy problem";
}
$query = 'Select * from domowe';


$result = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query);
$result3 = mysqli_query($connect, $query);

$secQuery = "insert into domowe values(1,'NieZdasz','Slaby','Uczen')";


$secResult = mysqli_query($connect, $secQuery);
while ($rows = mysqli_fetch_row($result)) {

    foreach ($rows as $row) {

        echo("<br/>");
        echo $row;
    }
}
echo("<br/> <br/> <br/>");

while ($rowss = mysqli_fetch_array($result2)) {

    foreach ($rowss as $row) {

        echo("<br/>");
        echo $row;
    }
}

echo("<br/> <br/> <br/>");

$rowsss = mysqli_num_rows($result3);

    printf("rows: %d", $rowsss );





