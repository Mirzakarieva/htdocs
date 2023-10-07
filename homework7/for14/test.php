<?php
$n = $_POST["n"] ;
$a = 1 ;
$res = 0 ;

for($i = 1 ; $i <= $n ; $i ++){
    $res += $a ;
    $a += 2 ;
    echo "$res<br>" ;
}

?>