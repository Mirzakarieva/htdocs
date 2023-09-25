<?php

$num = $_POST["num"] ;

$ed = ($num % 10);
$des = floor(($num % 100)/10) ;
$sot = floor($num/100) ;
$final =  $sot*100 + $ed*10 + $des ;


echo $final ;

?>