<?php

?><?php
class Cities{
    public $name;
    public $country;
    public $lang;

    function __construct($name, $country, $lang)
    {
        $this->name = $name;
        $this->country = $country;
        $this->lang = $lang;
    }
    function get_name(){
        echo "Shahar-". $this->name."<br>";
    }
    function get_country(){
        echo "Mamlakat:". $this->country."<br>" ;
    }
    function get_lang(){
        echo "Tili-". $this->lang."<br><br>" ;
    }
}


$city1 = new Cities("Andijon", "O'zbekiston", "O'zbek");
$city2 = new Cities("Moskva", "Rossiya","Rus");
$city3 = new Cities("Massachusets", "AQSh", "Ingliz");
$city4 = new Cities("Meksika", "Meksika", "Ispan");
$city5 = new Cities("Buharest", "BAE", "Arab");

$city1->get_name();
$city1->get_country();
$city1->get_lang();

$city2->get_name();
$city2->get_country();
$city2->get_lang();

$city3->get_name();
$city3->get_country();
$city3->get_lang();

$city4->get_name();
$city4->get_country();
$city4->get_lang();

$city5->get_name();
$city5->get_country();
$city5->get_lang();



?>