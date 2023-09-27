<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;

function order($num1, $num2){
    if($num1 > $num2){
        $res1 = $num1 ;
        $res2 = $num2 ;
    }else{
        $res1 = $num2 ;
        $res2 = $num1 ;
    }
    echo "$res1<br>$res2" ;
}

order($a, $b) ;

?>