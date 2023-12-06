<?php
class Car{
    public $name;
    public $year;
    public $brand;

    function __construct($name, $year, $brand)
    {
        $this->name = $name;
        $this->year = $year;
        $this->brand = $brand;
    }
    function get_name(){
        echo "Avtomobil nomi-". $this->name."<br>";
    }
    function get_year(){
        echo "Chiqarilgan yili:". $this->year."<br>" ;
    }
    function get_band(){
        echo "Brandi-". $this->brand."<br><br>" ;
    }
}


$car1 = new Car("Bentley", "2003", "Volkswagen&BMW");
$car2 = new Car("Cobalt", "2004","Chevrolet");
$car3 = new Car("Toyota Glanza Launch", "2022", "Toyota");
$car4 = new Car("Tiko", "1991", "Daewoo");
$car5 = new Car("Polaris RZR", "2024", "Polaris");

$car1->get_name();
$car1->get_year();
$car1->get_band();

$car2->get_name();
$car2->get_year();
$car2->get_band();

$car3->get_name();
$car3->get_year();
$car3->get_band();

$car4->get_name();
$car4->get_year();
$car4->get_band();

$car5->get_name();
$car5->get_year();
$car5->get_band();



?>