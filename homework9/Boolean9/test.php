<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;

function are_Odd($num1, $num2){
    echo var_dump(($num1% 2!=0) || ($num2% 2!=0)) ;
}
  
are_Odd($a, $b) ;

?>