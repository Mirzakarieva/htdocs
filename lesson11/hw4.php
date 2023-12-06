<?php
class Movies{
    public $name;
    public $year;
    public $country;

    function __construct($name, $year, $country)
    {
        $this->name = $name;
        $this->year = $year;
        $this->country = $country;
    }
    function get_name(){
        echo "Film nomi-". $this->name."<br>";
    }
    function get_year(){
        echo "Chiqarilgan yili:". $this->year."<br>" ;
    }
    function get_country(){
        echo "Chiqarilgan joyi-". $this->country."<br><br>" ;
    }
}


$movie1 = new Movies("Lighter & Princess", "2022", "China");
$movie2 = new Movies("Business proposial", "2022","Korea");
$movie3 = new Movies("Coffee & Vanilla", "2019", "Japan");
$movie4 = new Movies("Nasha Rasha", "2006", "Russia");
$movie5 = new Movies("Kelinlar qo'zg'oloni", "1984", "Uzbekistan");

$movie1->get_name();
$movie1->get_year();
$movie1->get_country();

$movie2->get_name();
$movie2->get_year();
$movie2->get_country();

$movie3->get_name();
$movie3->get_year();
$movie3->get_country();

$movie4->get_name();
$movie4->get_year();
$movie4->get_country();

$movie5->get_name();
$movie5->get_year();
$movie5->get_country();



?>