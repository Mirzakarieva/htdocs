<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$c = $_POST["c"] ;

$son1 = 0 ;
$son2 = 0 ;

do{
$a -= $c ;
$son1 ++ ;
}while($a >= $c) ;

do{
    $b -= $c ;  
    $son2 ++ ;
}while($b >= $c) ;

$res = $son1 * $son2 ;
echo $res ;
?>