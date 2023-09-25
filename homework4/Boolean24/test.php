<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$c = $_POST["c"] ;

$dis = !(($b**2 - 4 *$a *$c) < 0) ;

echo var_dump($dis) ;

?>
