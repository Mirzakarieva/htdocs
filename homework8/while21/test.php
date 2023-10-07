<?php
$n = $_POST["n"] ;
$a = 0;

do{
$m= $n % 10 ;
$n = ($n - $m)/10 ;

if($m%2 != 0)
    $a++ ;
}while($n/10 > 1);

if($a > 0)
    echo "BOR" ;
else
    echo "YO'Q" ;

?>