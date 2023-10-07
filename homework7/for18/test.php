<?php
$n = $_POST["n"] ;
$a = $_POST["a"] ;
$res = 1 ;
$res1 = 1 ;

for($i = 1 ; $i <= $n ; $i ++){
    $b = 1 ;
    $res = $res * $a * pow(-1 ,$b);
    $res1 += $res ;
    $b ++ ;
}
echo "$res1<br>" ;
?>