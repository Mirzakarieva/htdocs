<?php
$a = $_POST["a"] ;

function is_Odd($num){
    echo var_dump($num % 2 != 0) ;
}


is_Odd($a) ;
?>