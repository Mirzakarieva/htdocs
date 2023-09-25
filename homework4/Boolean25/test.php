<?php
$x = $_POST["x"] ;
$y = $_POST["y"] ;

$result = ($x < 0 && $y > 0) ;

echo var_dump($result) ;
?>