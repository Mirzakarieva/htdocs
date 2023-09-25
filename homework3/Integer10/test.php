<?php

$num = $_POST["num"] ;

$ed = ($num % 10);
$des = floor(($num % 100)/10) ;

echo "Единицы-$ed<br>" ;
echo "Десятки-$des" ;
?>