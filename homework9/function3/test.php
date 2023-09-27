<?php
$num = $_POST["num"] ;


function info($num1){
    if($num1 % 2 == 0)
        return "Juft" ;
    else
        return "Toq" ;
}

echo info($num) ;
?>