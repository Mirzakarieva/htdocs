<?php
namespace Phone ;
class Brand{
    public $phone_name;
    public function __construct($phone_name)
    {
        $this->phone_name=$phone_name;
    }
    public function phoneCompany_info(){
        echo "This phone is of ".$this->phone_name." brand<br>";
    }
}

?>