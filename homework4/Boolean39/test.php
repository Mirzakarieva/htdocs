<?php
$x = $_POST["x"] ;
$y = $_POST["y"] ;
$x1 = $_POST["x1"] ;
$y1 = $_POST["y1"] ;

$move = (abs($x - $x1) == abs($y - $y1)) || (($x == $x1) || ($y == $y1)) ;

echo var_dump($move) ;

?>