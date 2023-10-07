<?php
$p = $_POST["p"] ;
$s = 10 ;
$kun = 1 ;
$masofa = $s ;

do{
    $s += ($s / 100 * $p) ;
    $kun ++ ;
}while(2 * $masofa > $s) ;

echo "k-$kun kun<br>" ;
echo "Masofa-$s" ;
?>