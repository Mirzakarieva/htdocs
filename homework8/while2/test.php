<?php
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$c = 0 ;

do{
$a -= $b ;
$c++ ;
}while($a>$b);

echo $c ;

?>