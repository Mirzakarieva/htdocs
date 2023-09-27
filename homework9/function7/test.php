<?php
$num_1 = $_POST["num_1"] ;
$num_2 = $_POST["num_2"] ;

function isPrime($number) { 
    if ($number<=2) 
        echo "2<br>";  
    if ($number%2==0)   
        return false;  
    $i=3;  
    $max_factor = (int)sqrt($number); 
    while ($i<=$max_factor){ 
        if ($number%$i == 0)    
            return false;   
        $i+=2;  }  
    return true; } 
    
function getPrimes($max_number) { 
    for ($i=3; $i<=$max_number; $i++){ 
        if (isPrime($i))
            echo "$i<br>";  
    }
}

isPrime($num_1) ;
getPrimes($num_2) ;
?>