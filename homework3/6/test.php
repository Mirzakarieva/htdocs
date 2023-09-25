<?php 

$x1 = $_POST["x1"] ;
$x2 = $_POST["x2"] ;
$y1 = $_POST["y1"] ;
$y2 = $_POST["y2"] ;

$distance =round( sqrt(pow($x2-$x1 , 2) + pow($y2-$y1 , 2)) , 2) ;


echo "The distance between these two points is $distance ." ;
?>