<?php

$num = $_POST["num"] ;

$des = floor($num / 10) ;
$ed = $num % 10 ;

echo "Десятки-$des <br>";
echo "Единицы-$ed <br>";
?>