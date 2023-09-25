<?php
$num = $_POST["a"] ;

$ed = ($num % 10);
$des = floor(($num % 100)/10) ;
$sot = floor($num/100) ;
$order = (($sot+1) == $des && ($des+1) == $ed) || (($sot-1) == $des && ($des-1) == $ed) ;


echo var_dump($order) ;
?>