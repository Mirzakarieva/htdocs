<?php
$numbers = [
            3432,
            43542,
            83245, 
            2352, 
            7856, 
            54676, 
            97854, 
            65458, 
            1987, 
            91756
            ] ;

for($i = 0;$i < count($numbers);$i++)
    if($i < 5)
        echo "$numbers[$i]<br>" ;
    else
        break ;

?>