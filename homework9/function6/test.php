<?php
$num_1 = $_POST["num_1"] ;
$num_2 = $_POST["num_2"] ;
$num_3 = $_POST["num_3"] ;


function info($num1 , $num2 , $num3){
    if($num1 > $num2 && $num1 > $num3)
        return $num1 ;
    elseif($num2 > $num1 and $num2 > $num3)
        return $num2 ;
    else
        return $num3 ;
}

echo info($num_1 , $num_2 , $num_3) ;
?>