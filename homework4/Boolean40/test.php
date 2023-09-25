<?php
$x = $_POST["x"] ;
$y = $_POST["y"] ;
$x1 = $_POST["x1"] ;
$y1 = $_POST["y1"] ;

$move = ((abs($x - $x1) == 2) && (abs($y - $y1)) == 1) || ((abs($x - $x1) == 1) && (abs($y - $y1)) == 2);

echo var_dump($move) ;

?>