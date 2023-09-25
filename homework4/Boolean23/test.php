<?php
$num = $_POST["a"] ;

$ed = ($num % 10);
$sot = floor($num/100) ;
$order = ($ed == $sot) ;


echo var_dump($order) ;
?>