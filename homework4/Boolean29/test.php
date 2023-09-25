<?php
$x1 = $_POST["x1"] ;
$y1 = $_POST["y1"] ;
$x2 = $_POST["x2"] ;
$y2 = $_POST["y2"] ;
$x = $_POST["x"] ;
$y = $_POST["y"] ;

$ordinate = ($x > $x1) && ($x < $x2) ;
$abscissa = ($y < $y1) && ($y > $y2) ;

echo var_dump($ordinate && $abscissa) ;

?>