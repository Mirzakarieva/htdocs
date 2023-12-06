<?php

?><?php
class Food{
    public $name;
    public $country;
    public $type;

    function __construct($name, $country, $type)
    {
        $this->name = $name;
        $this->country = $country;
        $this->type = $type;
    }
    function get_name(){
        echo "Taom nomi-". $this->name."<br>";
    }
    function get_country(){
        echo "Mamlakati:". $this->country."<br>" ;
    }
    function get_type(){
        echo "Turi-". $this->type."<br><br>" ;
    }
}


$food1 = new Food("Plov", "Uzbekistan", "main");
$food2 = new Food("Beshbarmaq", "Kazakstan","main");
$food3 = new Food("French fries", "France", "snack");
$food4 = new Food("Crossan", "Italy", "dessert");
$food5 = new Food("Lagman", "Uygur", "main");

$food1->get_name();
$food1->get_country();
$food1->get_type();

$food2->get_name();
$food2->get_country();
$food2->get_type();

$food3->get_name();
$food3->get_country();
$food3->get_type();

$food4->get_name();
$food4->get_country();
$food4->get_type();

$food5->get_name();
$food5->get_country();
$food5->get_type();



?>