<?php
$n = $_POST["n"] ;
$res = 1 ;
$res1 =0 ;


for($i = 1 ; $i <= $n ; $i ++){
    $res *= $i ;
    $res1 += $res ;
}
echo "$res1" ;
?>