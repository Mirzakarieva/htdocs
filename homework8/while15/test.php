<?php
$s = $_POST["s"] ;
$p = $_POST["p"] ;
$oy = 0 ;
$summa = $s ;

do{
    $s += ($s / 100 * $p) ;
    $oy ++ ;
}while(2 * $summa > $s) ;

echo "k-$oy oy<br>" ;
echo "Summa-$s" ;
?>