<?php
$e = $_POST["e"] ;
$a1 = 1 ;
$a2 = 2 ;
$k = 3 ;


do{
$ak = ($a1 + 2 * $a2)/3 ;
$a1 = $a2 ;
$a2 = $ak ;
}while($e <= abs($ak-$a1)) ;

echo "K : $k<br>" ;
echo "Ak : $ak<br>" ;
echo "Ak-1 : $a1" ;
?>