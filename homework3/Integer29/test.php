<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$c = $_POST["c"] ;

$squareNum = floor($a/$c) * floor($b/$c) ;
$s = $a*$b - $squareNum * pow($c , 2) ;

echo "To'g'ri to'rtburchakning ichiga $squareNum ta kvadrat sig'adi<br>" ;
echo "Qolgan yuza-$s" ;

