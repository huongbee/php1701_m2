<?php

class SinhVien{
    public $name = "KPT";

    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }

}

class Hocsinh{
    public static $name = "KPT";
    const a=4;

    function setA(){
        return Hocsinh::a;
    }

    public $height = 100;

    static function getName(){
        return Hocsinh::$name;
    }

    function getName2(){
        return $this->getName();
    }

    function setName($name){
        Hocsinh::$name = $name;
    }


    function tangChieuCao($tangthem = 10){
        return $this->height = $this->height+$tangthem;
    }
    
}
//echo SinhVien::$name;

//echo Hocsinh::$name;


$sv = new SinhVien;
$sv->setName('PHP');
echo $sv->getName();

$sv2 = new SinhVien;
echo $sv2->name;
echo "<hr>";

// $hs = new Hocsinh;
// echo $hs->getName2();

Hocsinh::setName('OOP');
echo Hocsinh::getName();


Hocsinh::setName('OOP2');
echo Hocsinh::$name;
echo Hocsinh::setA();



// function tinhTong($a , $b){
//     return $a+=$b;
// }
// $a = 1;
// $b = 3;

// echo tinhTong($a,$b); //4

// echo $a; //1

// function tinhTong2(&$a , $b){
//     return $a+=$b;
// }

// echo tinhTong2($a,$b); //4

// echo $a; //4

// define('PI',3.14);


?>