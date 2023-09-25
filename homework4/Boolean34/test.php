<?php
$x = $_POST["x"] ;
$y = $_POST["y"] ;

$white = ($x + $y) % 2 != 0 ;

echo var_dump($white) ;

?>