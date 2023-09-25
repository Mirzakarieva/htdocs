<?php
$x = $_POST["x"] ;
$y = $_POST["y"] ;
$x1 = $_POST["x1"] ;
$y1 = $_POST["y1"] ;

$white = ($x + $y + $x1 + $y1) % 2 == 0 ;

echo var_dump($white) ;

?>