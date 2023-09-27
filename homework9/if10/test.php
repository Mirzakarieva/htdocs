<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;

function order($num1, $num2){
    if($num1 != $num2){
        $res1 = $num1+$num2 ;
        $res2 = $num1+$num2 ;
    }else{
        $res1 = 0 ;
        $res2 = 0 ;
    }
    echo "A:$res2<br>B:$res1" ;
}

order($a, $b) ;

?>