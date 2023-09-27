<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;

function is_Odd($num1, $num2){
    echo var_dump(($num1 + $num2) % 2!=0) ;
}
  
is_Odd($a, $b) ;

?>