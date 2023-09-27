<?php
$num1 = $_POST["a"] ;
$num2 = $_POST["b"] ;
$num3 = $_POST["c"] ;

function check($a , $b , $c){
    echo var_dump($a<=$b && $b<=$c) ;
}

check($num1 , $num2 , $num3) ;

?>