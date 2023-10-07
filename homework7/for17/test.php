<?php
$n = $_POST["n"] ;
$a = $_POST["a"] ;
$res = 1 ;
$res1 = 1 ;

for($i = 1 ; $i <= $n ; $i ++){
    $res *= $a ;
    $res1 += $res ;
    echo "$res<br>" ;
}
echo "$res1<br>" ;
?>