<?php

$country = [
    [
        'id' => 1,
        "name" => "USA", 
        "capital" => "Washington", 
        "language" => "english", 
        "religion" => "Christianity",
    ],

    [
        'id' => 2,
        "name" => "Australia", 
        "capital" => "Canberra", 
        "language" => "english", 
        "religion" => "Christianity",
    ],

    [
        'id' => 3,
        "name" => "Korea", 
        "capital" => "Seoul", 
        "language" => "korean", 
        "religion" => "none",
    ],

    [
        'id' => 4,
        "name" => "Japan", 
        "capital" => "Tokio", 
        "language" => "japanese", 
        "religion" => "shinto",
    ],

    [
        'id' => 5,
        "name" => "China", 
        "capital" => "Pekin", 
        "language" => "chinese", 
        "religion" => "Buddhism",
    ],
] ;



foreach($country as $state){
    echo $state["id"] , "." , $state["name"] , "<br>" ;
    shuffle($country) ;
}
echo  "<br>2)Ro'yxat uzunligi:" , count($country) , "<br><br>" ;
echo  "<br>3)Tartiblanmagan ro'yxat:<br>" ;

foreach($country as $state){
    echo $state["id"] , "." , $state["name"] , "<br>" ;
}






?>

