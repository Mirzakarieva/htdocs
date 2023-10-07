<?php
$n = $_POST["n"] ;
$x = $_POST["x"] ;
$res = 1 ;
$res1 = 1 ;
$result_degree = 1 ;


for($i = 1 ; $i <= $n ; $i ++){
    $result_degree *= $x ;
    $res *= $i ;
    $res1 += ($result_degree/$res) ;
}
echo "$res1<br>" ;
?>