<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;

function check($num1 , $num2){
    echo var_dump(($num1 >= 0) || ($num2 < -2)) ;
}

check($a , $b) ;


?>