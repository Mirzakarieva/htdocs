<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$c = $_POST["c"] ;

echo var_dump(($a * $b * $c) < 0 && !(($a < 0) && ($b < 0) && ($c < 0) )) ;
?>