<?php
$num = $_POST["a"] ;

$ed = ($num % 10);
$des = floor(($num % 100)/10) ;
$sot = floor($num/100) ;

echo var_dump(($ed != $des) && ($des != $sot) && ($ed != $sot )) ;
?>