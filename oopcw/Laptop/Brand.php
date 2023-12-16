<?php
namespace Laptop ;
class Brand{
    public $laptop_name;
    public function __construct($laptop_name)
    {
        $this->laptop_name=$laptop_name;
    }
    public function laptopCompany_info(){
        echo "This is laptop of ".$this->laptop_name." company<br>";
    }
}

?>