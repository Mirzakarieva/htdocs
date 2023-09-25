<?php
$n = $_POST["n"] ;
$summa = 0 ;
$k = 0 ;

do{ 
    $k++ ;
    $summa += $k ;
}while($summa<$n) ;


echo "k=$k<br>" ;
echo "Yig'indi = $summa" ;
?>