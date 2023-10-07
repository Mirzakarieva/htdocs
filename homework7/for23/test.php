<?php
$n = $_POST["n"] ;
$x = $_POST["x"] ;
$res = 1 ;
$res1 = 0 ;
$result_degree = 1 ;
$dlya_znaka = 0 ;


for($i = 1 ; $i <= $n ; $i ++){
    $result_degree *= $x ;
    $res *= $i ;
    if($i % 2 == 1){
        $dlya_znaka ++ ;
        if($dlya_znaka % 2 == 1)
            $res1 += ($result_degree/$res) ;
        else
            $res1 -= ($result_degree/$res) ;
    }
}
echo "$res1<br>" ;
?>