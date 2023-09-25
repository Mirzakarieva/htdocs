<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;


do{
$a -= $b ;
}while($a>$b);

echo $a ;

?>