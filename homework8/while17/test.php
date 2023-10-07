<?php
$n = $_POST["n"] ;
$m = $_POST["m"] ;
$butun = 0 ;
do{
    $butun++ ;
    $n-=$m ;
}while($n>$m) ;

echo "Butun:$butun<br>" ;
echo "Qoldiq:$n" ;
?>