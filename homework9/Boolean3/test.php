<?php
$a = $_POST["a"] ;

function is_Even($num){
    echo var_dump($num % 2 == 0) ;
}

is_Even($a) ;
?>