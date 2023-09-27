<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$c = $_POST["c"] ;

function is_Pos($num1, $num2, $num3){
    $res = 0 ;
    if($num1>0)
        $res += 1 ;
    if($num2>0)
        $res += 1 ;
    if($num3>0)
        $res += 1 ;
    echo $res ;
}

is_Pos($a, $b, $c) ;

?>