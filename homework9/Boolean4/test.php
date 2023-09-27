<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;

function check($num1 , $num2){
    echo var_dump(($num1 > 2) && ($num2<=3)) ;
}

check($a , $b) ;
?>