<?php
namespace Laptop ;
class Model{
    public $model_name;
    public function __construct($model_name)
    {
        $this->model_name=$model_name;
    }
    public function laptopModelInfo(){
        echo "Model of this laptop is called ".$this->model_name."<br>";
    }
}

?>