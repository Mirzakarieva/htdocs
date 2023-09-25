<?php

$num = $_POST["num"] ;

$ed = ($num % 10);
$des = floor(($num % 100)/10) ;
$sot = floor($num/100) ;
$sum = $ed + $des + $sot ;

echo "Сумма цифр-$sum" ;

?>