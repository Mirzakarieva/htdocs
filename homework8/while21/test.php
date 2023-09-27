<?php
$n = $_POST["n"] ;
$a = 10;

do{
$m= $n % 10 ;
$a*=10 ;
echo "$n<br>" ;
}while($n>=10);


?>