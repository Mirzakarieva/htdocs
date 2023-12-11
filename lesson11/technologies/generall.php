<?php

class Technologies{
    public $name;
    public $year;
    public $use ;

    public function __construct($name, $year, $use)
    {
        $this->name= $name;
        $this->year= $year;
        $this->use= $use;
    }

    public function get_name() {
        echo "Tehnologiya nomi:".$this->name ;
    }

    public function get_year() {
        echo "Yaratilgan yili:".$this->year ;
    }

    public function get_use() {
        echo "Ishlatilishi:".$this->use ;
    }

}

class Phone extends Technologies{
    public $small_memory_size;
    public $small_inch;
    public $screentype;

    public function __construct($name, $year,$use, $small_memory_size, $small_inch, $screentype){
        parent:: __construct($name,"Phone", $year,$use);
        $this->small_memory_size= $small_memory_size;
        $this->small_inch= $small_inch;
        $this->screentype= $screentype;
     }
    
    public function get_small_memory_size(){
        echo "Hotirasi:". $this->small_memory_size ;
    }
    public function get_small_inch(){
        echo "Hajmi:". $this->small_inch;
    }
    public function screentype(){
        echo "Telefon turi:". $this->screentype ;
    }
    
}

class TV extends Technologies{
    public $nomi;
    public $big_inch;
    public $card;

    public function __construct($nomi, $big_inch,$card){
        $this->nomi= $nomi;
        $this->big_inch= $big_inch;
        $this->card= $card;
     }
    
    public function nomi(){
        echo "Radiobloki bor!" ;
    }
    public function big_inch(){
        echo "Razmeri: ". $this->big_inch;
    }
    public function aloqa(){
        echo "Antenna/Smart karta: ". $this->card ;
    }
    
}

class Laptop extends Technologies{
    public $keyboard;
    public $modelNomi;
    public $memory;

    public function __construct($keyboard, $modelNomi, $memory){
        $this->keyboard= $keyboard;
        $this->modelNomi= $modelNomi;
        $this->memory= $memory;
     }
    
    public function keyboard(){
        echo "Klaviaturasi: ". $this->keyboard ;
    }
    public function modelNomi(){
        echo "Model nomi: ". $this->modelNomi;
    }
    public function memory(){
        echo "Hotirasi: ". $this->memory ;
    }
    
}

class Samsung extends Phone{
    public $operating_system;
    public $model;
    public $color;

    public function __construct($name, $year,$use, $small_memory_size, $small_inch, $screentype, $operating_system,$model,$color){
        parent:: __construct($name,"Samsung", $year,$use, $small_memory_size, $small_inch, $screentype);
        $this->operating_system= $operating_system;
        $this->model= $model;
        $this->color= $color;
     }

    public function android(){
        return "Android's camera is better<br>";
    }

    public function source(){
        return "Android is based on open source<br>";
    }

    public function get_info(){
        echo "Model nomi: ". $this->model. "<br>Rangi-". $this->color."<br><br>" ;
    }
}


class Apple extends Phone{
    public $model ;
    public $memory;
    public $camera_count;

    public function __construct($model, $memory,$camera_count ){
        $this->model= $model;
        $this->memory= $memory;
        $this->camera_count= $camera_count;
     }

    public function iOs(){
        return "IOs is more secure<br>";
    }

    public function fast(){
        return "IOs works faster<br>";
    }

    public function info(){
        echo $this->model."ning".$this->camera_count."ta kamerasi bor<br><br>";
    }
}

class Nokia extends Phone{
    public $games ;
    public $size;
    public $chidamli;

    public function __construct($games, $size, $chidamli){
        $this->games= $games;
        $this->size= $size;
        $this->chidamli= $chidamli;
     }

    public function game(){
        return "Nokianing o'lchami".$this->size;
    }

    public function ishonchli(){
        return "Nokia juda mustahkam<br>";
    }

    public function info(){
        echo "Nokiada".$this->games."o'yini bor.<br><br>";
    }
}


class LG extends TV{
    public $adaptor;
    public $powercable;
    public $hdmi;

    public function __construct($adaptor, $powercable, $hdmi){
        $this->adaptor= $adaptor;
        $this->powercable= $powercable;
        $this->hdmi= $hdmi;
     }

    public function lg(){
        return "LG typically offers a wider range of TV sizes<br>";
    }

    public function lg_info(){
        return "The LG uses an IPS panel, and it has much better viewing angles and better local dimming.<br>";
    }

    public function get_info(){
        echo "Model nomi". $this->nomi. "<br>Adaptori-". $this->adaptor."<br><br>" ;
    }
}


class Artel extends TV{
    public $remote ;
    public $vga;
    public $invertor;

    public function __construct($remote, $vga,$invertor ){
        $this->remote= $remote;
        $this->vga= $vga;
        $this->invertor= $invertor;
     }

    public function artel(){
        return "Artel Electronics is a company from Uzbekistan that manufactures consumer electronics. <br>";
    }

    public function company(){
        return "The company's headquarters are in Tashkent, Uzbekistan.<br>";
    }

    public function info(){
        echo $this->nomi."ning o'lchami".$this->big_inch."<br><br>";
    }
}

class TCL extends TV{
    public $cabinet ;
    public $control_board;
    public $mother_board;

    public function __construct($cabinet, $control_board, $mother_board){
        $this->cabinet= $cabinet;
        $this->control_board= $control_board;
        $this->mother_board= $mother_board;
     }

    public function history(){
        return "Since 2015, TCL offers its own Streaming Television: GoLive TV or simply GoLive. It was later renamed TCL Channel in 2021."."<br>";
    }

    public function country(){
        return "TCL Technology (originally an abbreviation for Telephone Communication Limited) is a Chinese partially state-owned electronics company headquartered in Huizhou, Guangdong Province.<br>";
    }

    public function info(){
        echo $this->nomi."ning materinskaya platasi-".$this->mother_board."<br><br>";
    }
}



class Hp extends Laptop{
    public $operating_system;
    public $model;
    public $color;

    public function __construct($operating_system, $model, $color){
        $this->operating_system= $operating_system;
        $this->model= $model;
        $this->color= $color;
     }

    public function full_name(){
        return "The Hewlett-Packard Company, commonly shortened to Hewlett-Packard or HP<br>";
    }

    public function location(){
        return "American multinational information technology company headquartered in Palo Alto, California. <br>";
    }

    public function get_info(){
        echo "Model nomi". $this->model. "<br>Rangi-". $this->color ;
    }
}


class Lenovo extends Laptop{
    public $cpu ;
    public $harddrive_price;
    public $battery;

    public function __construct($cpu, $harddrive_price,$battery ){
        $this->cpu= $cpu;
        $this->harddrive_price= $harddrive_price;
        $this->battery= $battery;
     }

    public function lenovo(){
        return "On average, a laptop battery can last between 2-5 years or between 300-500 charge cycles.<br>";
    }

    public function hometown(){
        return "China<br>";
    }

    public function info(){
        echo "Lenovo hard drivening narhi".$this->harddrive_price."<br><br><br>";
    }
}

class Asus extends Laptop{
    public $ram ;
    public $touch_pad;
    public $hinges;

    public function __construct($ram , $touch_pad, $hinges ){
        $this->ram= $ram;
        $this->touch_pad= $touch_pad;
        $this->hinges= $hinges;
     }

    public function asusInfo(){
        return "ASUSTeK Computer Inc is a Taiwanese multinational computer, phone hardware and electronics manufacturer headquartered in Beitou District, Taipei, Taiwan<br>";
    }

    public function asusRam(){
        return $this->modelNomi." modelning RAMining narhi".$this->ram."<br>";
    }

    public function info(){
        echo "Asus was founded in Taipei in 1989 by T.H. Tung, Ted Hsu, Wayne Hsieh and M.T. Liao, all four having previously worked at Acer as hardware engineers.<br><br>";
    }
}
?>