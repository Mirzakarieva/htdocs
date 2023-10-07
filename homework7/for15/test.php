<?php
$n = $_POST["n"] ;
$a = $_POST["a"] ;
$res = 1 ;

for($i = 1 ; $i <= $n ; $i ++){
    $res *= $a ;

}
 
echo "$res<br>" ;
?>