<?php
$a1 = $_POST["a1"] ;
$d = $_POST["d"] ;
$n = $_POST["n"] ;

$sn = (2*$a1 + $d*($n - 1)) * $n /2;


echo "Sum of first n terms is $sn ." ;
?>