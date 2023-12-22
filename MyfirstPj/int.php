<?php 


use Illuminate\Support\Facades\Route;

//************beginning of the integer part ********************
Route::get('/data/{sm}', function ($sm,){

    $fullmeters = floor($sm / 100) ;


    echo "There is $fullmeters full metres in $sm santimeters ." ;
    
});

//***** integer 2 *********
Route::get('/data/{kg}', function ($kg,){
 
$fulltonn = floor($kg / 1000) ;


echo "There is $fulltonn full tons in $kg kilogramms ." ;
});

//***** integer 3 *********
Route::get('/data/{hajm}', function ($hajm,){
   $kilobayt = floor($hajm / 1024) ;

    return $kilobayt;
});

//***** integer 4 *********
Route::get('/data/{a}/{b}', function ($a, $b,){
    $times = floor($a / $b) ;


echo "There is $times B in A." ;
 });

 //***** integer 5 *********
Route::get('/data/{a}/{b}', function ($a, $b,){
    $d = $a % $b ;
 
     return "Joylashmagan qismi: $d ";
 });

 //***** integer 6 *********
Route::get('/data/{num}', function ($num,){
    $des = floor($num / 10) ;
    $ed = $num % 10 ;
    
    echo "Десятки-$des <br>";
    echo "Единицы-$ed <br>";
 });

 //***** integer 7 *********
Route::get('/data/{num}', function ($num,){
    $num1 = floor($num / 10) ;

    $birlik = $num % 10;

    $res = $num1 + $birlik ;
    return "O'nliklar xonasi:$num1 ga teng <br> 
    Birliklar xonasi: $birlik ga teng<br>
    Raqamlar yig'indisi: $res ga teng" ;
   
 });

 //***** integer 8 *********
Route::get('/data/{c}', function ($c,){

    $number = floor($c / 10) ;

    $birlik = $c % 10;

    $d= $number ;

    $number = $birlik;


    $birlik = $d ;
 
     return "birinchi raqam $number ga teng: <br>
     ikkinchi raqam  $birlik ga teng:";
 });

 //***** integer 9 *********
Route::get('/data/{a}', function ($a,){

    $result = floor($a / 100) ;
    return "Yuzlar xonasidagi son: $result ga teng: " ;
 
 });

 //***** integer 10 *********
Route::get('/data/{m}', function ($m,){

    $num2 = floor($m / 10) ;

    $num3 = $m % 10;
 
     return " O'nliklar xonasi:$num2 ga teng <br> 
     Birliklar xonasi: $num3 ga teng";
 });

?>