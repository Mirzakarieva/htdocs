<?php
$n = $_POST["n"] ;
$i = 0 ;
$a = 1 ;
$res2 = 1 ;

do{
    $res = $i + $a ;
    $i = $a ;
    $a = $res ;
    $res2 ++ ;

}while($res < $n) ;

echo $res2 ;

?>