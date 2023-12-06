<?php

class Car {
    public $name ;

    public $color ;

    public $price ;

    public function go(){
        return "Go, go, go!";
    }

    public function info($name, $color, $price){
        $this->name = $name ;
        $this->color = $color ;
        $this->price = $price ;
        
    }

    public function all(){
        echo  $this->name .":<br>Rangi-". $this->color.":<br>Narhi-". $this->price ."<br>" ;
    }
 
}

$car1= new Car();
$car1->name = "Malibu";
$car1->color = "White";
$car1->price = "30 000$";

// echo $car1->name .":<br>Rangi-". $car1->color.":<br>Narhi-". $car1->price ."<br>";

$car2= new Car();
$car2->name = "Gentra";
$car2->color = "black";
$car2->price = "15 000$";

echo $car2->name .":<br>Rangi-". $car2->color.":<br>Narhi-". $car2->price ."<br>";

$car1->all();
?>