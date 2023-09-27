<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;

function more($num1, $num2){
    if($num1 > $num2)
        $res = $num1 ;
    else
        $res = $num2 ;
    echo "$res" ;
}

more($a, $b) ;

?>