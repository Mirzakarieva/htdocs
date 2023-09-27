<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$c = $_POST["c"] ;

function is_Pos($num1, $num2, $num3){
    $pos = 0 ;
    $neg = 0 ;
    if($num1>0)
        $pos += 1 ;
    else
        $neg += 1 ;
    if($num2>0)
        $pos += 1 ;
    else
        $neg += 1 ;
    if($num3>0)
        $pos += 1 ;
    else
        $neg += 1 ;
    echo "Positive:$pos<br>Negative:$neg" ;
}

is_Pos($a, $b, $c) ;

?>