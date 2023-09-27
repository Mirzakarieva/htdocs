<?php
$num = $_POST["num"] ;


function power($num1){
    $square = $num1 * $num1 ;
    $cube = $num1 * $num1 * $num1 ;
    return "kvadrat:$square <br> kub:$cube" ;
}

echo power($num) ;
?>