<?php
$name = $_POST["name"] ;
$age = $_POST["age"] ;

function data($name1 , $age1){
    $year = 2023-$age1 ;
    return "$name1 $year-yilda tug'ilgan." ;
}

echo data($name , $age) ;
?>