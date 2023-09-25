<?php
$a = $_POST["a"] ;
$summa = 1 ;
$k = 1 ;

do{ 
    $k++ ;
    $summa += (1/$k) ;
}while($summa<=$a) ;

$summa -=(1/$k) ;
$k -= 1 ;


echo "k=$k<br>" ;
echo "Yig'indi = $summa" ;
?>