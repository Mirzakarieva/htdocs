<?php
$taom1 = $_POST["taom1"] ;
$taom2 = $_POST["taom2"] ;
$taom3 = $_POST["taom3"] ;
$taom4 = $_POST["taom4"] ;
$taom5 = $_POST["taom5"] ;
$taomlar = [] ; 

array_push($taomlar , $taom1) ;
array_push($taomlar , $taom2) ;
array_push($taomlar , $taom3) ;
array_push($taomlar , $taom4) ;
array_push($taomlar , $taom5) ;
for($i=0; $i<5; $i++){
    echo $taomlar[$i],"<br>" ;
}



?>