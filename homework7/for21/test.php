<?php
$n = $_POST["n"] ;
$res = 1 ;
$res1 = 1 ;


for($i = 1 ; $i <= $n ; $i ++){
    $res *= $i ;
    $res1 += (1/$res) ;
}
echo "$res1<br>" ;

?>