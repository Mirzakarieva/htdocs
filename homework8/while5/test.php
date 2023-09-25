<?php
$n = $_POST["n"] ;
$c = 1 ;
$k = 0;

do{
$c *= 2 ;
$k ++ ;
}while($n>$c);

if($n == $c)
    echo "k-$k" ;
else
    echo "n 2-ning darajasi emas" ;

?>