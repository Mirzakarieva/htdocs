<?php
$a = $_POST["a"] ;

$result = (($a > 9) && ($a < 100) && ($a % 2) == 0) ;

echo var_dump($result) ;
?>