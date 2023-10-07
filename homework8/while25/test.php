<?php
$n = $_POST["n"] ;
$i = 0 ;
$a = 1 ;

do{
    $res = $i + $a ;
    $i = $a ;
    $a = $res ;

}while($res <= $n) ;
     
echo $res ;
?>