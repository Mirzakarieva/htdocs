<?php
class Technology{
    public $year;
    public $inventor;

    public function __construct($year, $inventor){
        $this->year= $year;
        $this->inventor= $inventor;
    }

    public function action(){
        return "Making life easier";
    }

    public function sleep(){
        return "Sleeping" ;
    }
        
}
   
class Phones extends Technology{
    public $brand;
    public $color;

    public function call(){
        return "Phone Ring";
    }

    public function record(){
        return "Rasmga oool";
    }

}

class Samsung extends Phones{
    public $operating_system;
    public $model;

    public function android(){
        return "Android's camera is better";
    }

    public function source(){
        return "Android is based on open source";
    }
}
    $samsung1 = new Samsung("2019", "Lee Byung-chul", "Samsung", "red", "Android", "Samsung A12");
    echo $samsung1->android() . "<br>";
    $samsung2 = new Samsung("2012", "Lee Byung-chul", "Samsung", "Titanium gray", "Android", "Samsung Note2");
    echo $samsung2->source();


class Apple extends Phones{
    public $model ;
    public $memory;

    public function iOs(){
        return "IOs is more secure";
    }

    public function fast(){
        return "IOs works faster";
    }

}


$apple1 = new Apple("2019", "Steve Jobs", "Apple", "white", "Iphone x", "64");
echo $apple1->iOs();
$apple2 = new Apple("2012", "Steve Jobs", "Apple", "gold", "Ihpone 13", "512");
echo $apple2->fast() ;