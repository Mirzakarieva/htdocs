<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;

function less($num1, $num2){
    if($num1 > $num2)
        $res = 2 ;
    else
        $res = 1 ;
    echo "$res" ;
}

less($a, $b) ;

?>