<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$c = $_POST["c"] ;

$right = ($c == sqrt($a**2 + $b**2)) ;

echo var_dump($right) ;
?>