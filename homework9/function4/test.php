<?php
$num_1 = $_POST["num_1"] ;
$num_2 = $_POST["num_2"] ;


function info($num1 , $num2){
    if($num1 > $num2)
        return $num1 ;
    elseif($num2 > $num1)
        return $num2 ;
    else
        return "Sonlar teng" ;
}

echo info($num_1 , $num_2) ;
?>