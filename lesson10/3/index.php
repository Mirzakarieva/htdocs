<?php
$people = [ 
            [
                "id" => 1 ,
                "name" => "Mohira",
                "surname"=> "Mirzakariyeva",
                "age" => "17",
                "region" => "Toshkent",
            ],

            [
                "id" => 2 ,
                "name" => "Svetlana",
                "surname"=> "Zuyeva",
                "age" => "57",
                "region" => "Toshkent",
            ],

            [
                "id" => 3 ,
                "name" => "Aygul",
                "surname"=> "Alibekova",
                "age" => "55",
                "region" => "Toshkent",
            ],

            [
                "id" => 4 ,
                "name" => "Shahodat",
                "surname"=> "Djurayevna",
                "age" => "37",
                "region" => "Toshkent",
            ],

            [
                "id" => 5 ,
                "name" => "Alyona",
                "surname"=> "Savicheva",
                "age" => "18",
                "region" => "Toshkent",
            ] 
    



] ;

foreach($people as $person){
    if($person["age"] > 20){
        echo $person["name"]. "<br>" ;
        echo $person["surname"]. "<br>" ;
        echo $person["age"]. "<br>" ;
        echo $person["region"]. "<br><br>" ;
    }
        
}