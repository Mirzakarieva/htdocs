<?php

abstract class Animal {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}


class Cat extends Animal {
  public function intro() : string {
    return "I'm Animal! I'm a $this->name!";
  }
}

class Dog extends Animal {
  public function intro() : string {
    return "I can byte! I'm a $this->name!";
  }
}

class Dolphin extends Animal {
  public function intro() : string {
    return "I can swim! I'm a $this->name!";
  }
}


$cat = new Cat("Cat");
echo $cat->intro();
echo "<br>";

$dog = new Dog("Dog");
echo $dog->intro();
echo "<br>";

$dolphin = new Dolphin("Dolphin");
echo $dolphin->intro();
?>