<?php
$e = $_POST["e"] ;
$a = 2 ;
$k = 2 ;

do{
$ak = 2 + 1/$a ;

}while($e <= abs($ak-$a)) ;

echo "K : $k<br>" ;
echo "Ak : $ak<br>" ;
echo "Ak-1 : $a" ;
?>