<?php
class Animal{
    public $name;
    public $size;
    public $type;

    function __construct($name, $size, $type){
        $this->name= $name;
        $this->size= $size;
        $this->type= $type;

    }
    function get_name(){
        echo "Nomi:". $this->name ."<br>";
    }

    function get_size(){
        echo "Hajmi:". $this->size ."<br>";
    }

    function get_type(){
        echo "Turi:". $this->type ."<br><br>";
    }
}

$animal1 = new Animal("Delfin", "katta", "Yertqich");
$animal2 = new Animal("Tipratikan", "kichkina", "Yertqich");
$animal3 = new Animal("Mushuk", "o'rtacha", "Yertqich");
$animal4 = new Animal("Qo'y", "katta", "O'tho'r");
$animal5 = new Animal("Toshbaqa", "kichkina", "O'tho'r");

$animal1->get_name();
$animal1->get_size();
$animal1->get_type();

$animal2->get_name();
$animal2->get_size();
$animal2->get_type();

$animal3->get_name();
$animal3->get_size();
$animal3->get_type();

$animal4->get_name();
$animal4->get_size();
$animal4->get_type();

$animal5->get_name();
$animal5->get_size();
$animal5->get_type();


?>
