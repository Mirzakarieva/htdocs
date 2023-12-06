<?php
class Fruit{
    public $name;
    public $color;
    public $size;

    function __construct($name, $color, $size)
    {
        $this->name = $name;
        $this->color = $color;
        $this->size = $size;
    }
    function get_name(){
        echo "Meva nomi-". $this->name."<br>";
    }
    function get_color(){
        echo "Rangi:". $this->color."<br>" ;
    }
    function get_size(){
        echo "Shakli-". $this->size."<br><br>" ;
    }
}


$fruit1 = new Fruit("Pinaple", "brown", "katta");
$fruit2 = new Fruit("Mandarin", "sariq","kichkina");
$fruit3 = new Fruit("Olma", "qizil", "o'rtacha");
$fruit4 = new Fruit("Nok", "yashil", "o'rtacha");
$fruit5 = new Fruit("Uzum", "pushti", "katta");

$fruit1->get_name();
$fruit1->get_color();
$fruit1->get_size();

$fruit2->get_name();
$fruit2->get_color();
$fruit2->get_size();

$fruit3->get_name();
$fruit3->get_color();
$fruit3->get_size();

$fruit4->get_name();
$fruit4->get_color();
$fruit4->get_size();

$fruit5->get_name();
$fruit5->get_color();
$fruit5->get_size();



?>