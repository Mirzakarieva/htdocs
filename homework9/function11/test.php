<?php
$x = $_POST["x"] ;

function check($num){
    if($num<50 && $num>0){
        for($i = 0 ; $i<=100 ; $i++)   
             if($i % 3 == 0)
                 echo "$i<br>" ;
    }  
    elseif($num>=50 && $num<=100){
        for($i = 0 ; $i<=100 ; $i++)   
             if($i % 5 == 0 || $i % 8 == 0)
                 echo "$i<br>" ;
    }
}

check($x) ;
?>