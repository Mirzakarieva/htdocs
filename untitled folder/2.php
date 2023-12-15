<?php

abstract class Fruit {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

class Apple extends Fruit {
  public function intro() : string {
    return "I'm fruit! I'm an $this->name!";
  }
}

class Orange extends Fruit {
  public function intro() : string {
    return "My name and color are same! I'm an $this->name!";
  }
}

class Apricot extends Fruit {
  public function intro() : string {
    return "Danagi bor! I'm an $this->name!";
  }
}


$apple = new apple("Apple");
echo $apple->intro();
echo "<br>";

$orange = new Orange("Orange");
echo $orange->intro();
echo "<br>";

$apricot = new Apricot("Apricot");
echo $apricot->intro();
?>