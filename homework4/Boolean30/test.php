<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$c = $_POST["c"] ;

$equal = ($a == $b) && ($b == $c) && ($a == $c) ;

echo var_dump($equal) ;
?>