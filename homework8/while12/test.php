<?php
$n = $_POST["n"] ;
$summa = 0 ;
$k = 0 ;

do{ 
    $k++ ;
    $summa += $k ;
}while($summa<=$n) ;

$summa -= $k ;
$k -= 1 ;

echo "k=$k<br>" ;
echo "Yig'indi = $summa" ;
?>