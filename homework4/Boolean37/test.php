<?php
$x = $_POST["x"] ;
$y = $_POST["y"] ;
$x1 = $_POST["x1"] ;
$y1 = $_POST["y1"] ;

$move = ((abs($x - $x1) == 1) || (($x - $x1) == 0)) && ((abs($y - $y1) == 1) || ($y - $y1) == 0) && (!((($x - $x1) == 0) && (($y - $y1) ==0))) ;

echo var_dump($move) ;

?>