<?php

$num = $_POST["num"] ;

$des = floor($num / 10) ;
$ed = $num % 10 ;
$sum = $des + $ed ;

echo "Сумма цифр-$sum <br>";
?>