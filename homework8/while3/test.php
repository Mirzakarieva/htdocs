<?php
$n = $_POST["n"] ;
$k = $_POST["k"] ;
$c = 0 ;

do{
$n -= $k ;
$c++ ;
}while($n>$k);

echo "qoldiq-$n<br>" ;
echo "butun qismi-$c" ;

?>