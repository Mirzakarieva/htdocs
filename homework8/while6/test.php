<?php
$n = $_POST["n"] ;
$minus = 2 ;
$n1 = $n ;


if($n % 2 == 0)
    $c = 2 ;
else
    $c = 1 ;

do{
    $n -=2 ;  
    $n1 *= $n ;      
    }while($n>$c);

echo "n!!=$n1"
?>