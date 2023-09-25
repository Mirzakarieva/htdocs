<?php

$num = $_POST["num"] ;

$changed = ($num % 10)* 10 + floor($num / 10);

echo $changed ;
?>