<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;

echo var_dump(($a% 2!=0) || ($b% 2!=0)) ;
?>