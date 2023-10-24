<?php
$sonlar = [] ;
for($i=0 ; $i<=100; $i++){
    if($i%3==0 && $i%5==0)
        array_push($sonlar , $i) ;
}

for($i=0; $i< count($sonlar); $i++){
    echo $sonlar[$i], "<br>" ;
}