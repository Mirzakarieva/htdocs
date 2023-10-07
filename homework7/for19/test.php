<?php
$n = $_POST["n"] ;
$res = 1 ;



for($i = 1 ; $i <= $n ; $i ++){
    $res *= $i ;
}
echo "$res<br>" ;
?>