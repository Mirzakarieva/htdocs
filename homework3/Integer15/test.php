<?php

$num = $_POST["num"] ;

$ed = ($num % 10);
$des = floor(($num % 100)/10) ;
$sot = floor($num/100) ;
$result = $ed + $des*100 + $sot*10 ;

echo $result ;

?>