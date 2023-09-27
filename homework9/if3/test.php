<?php
$a = $_POST["a"] ;

function is_Pos($num){
    if($num>0)
        $num += 1 ;
    elseif($num<0)
        $num -= 2 ;
    else
        $num = 10 ;
    echo $num ;
}

is_Pos($a) ;

?>