<?php
$a = $_POST["a"] ;

function is_Pos($num){
    if($num>0)
        echo $num+1 ;
    else
        echo $num-2 ;
}

is_Pos($a) ;

?>