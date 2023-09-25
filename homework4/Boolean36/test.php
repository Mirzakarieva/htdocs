<?php
$x = $_POST["x"] ;
$y = $_POST["y"] ;
$x1 = $_POST["x1"] ;
$y1 = $_POST["y1"] ;

$move = ($x == $x1) || ($y == $y1) ;

echo var_dump($move) ;
?>