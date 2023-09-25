<?php
$a = $_POST["a"] ;
$summa = 1 ;
$k = 1 ;

do{ 
    $k++ ;
    $summa += (1/$k) ;
}while($summa<=$a) ;



echo "k=$k<br>" ;
echo "Yig'indi = $summa" ;
?>