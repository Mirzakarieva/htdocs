<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$c = $_POST["c"] ;

$law = (($a + $b> $c)&&($c + $b> $a)&&($a + $c> $b)) ;

echo var_dump($law) ;

?>