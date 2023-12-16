<?php
namespace Phone ;
class Model{
    public $model_name;
    public function __construct($model_name)
    {
        $this->model_name=$model_name;
    }
    public function phoneModelInfo(){
        echo "Model of this phone is called ".$this->model_name."<br>";
    }
}

?>