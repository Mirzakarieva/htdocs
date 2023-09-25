<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$c = $_POST["c"] ;

echo var_dump(($a == $b) || ($a == $c) || ($b ==$c )) ;
?>