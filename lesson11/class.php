<?php
class People{
    public $name;
    public $age;
    public $region;

    public function __construct($name, $age, $region){
        $this->name= $name;
        $this->age= $age;
        $this->region= $region;
    }

    public function eat(){
        return "Eating meal";
    }

    public function sleep(){
        return "Sleeping" ;
    }
        
}
   
class Student extends People{
    public $contract;
    public $group;

    public function money(){
        return "spend Money";
    }

    public function learning(){
        return "Learn Laravel in the night";
    }

}

$student1 = new Student("Azizbek", "20", "Andijon", "male");
echo $student1->sleep();



?>