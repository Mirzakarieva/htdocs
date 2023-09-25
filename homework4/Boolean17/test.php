<?php
$a = $_POST["a"] ;

$result = (($a > 99) && ($a < 1000) && ($a % 2) != 0) ;

echo var_dump($result) ;
?>