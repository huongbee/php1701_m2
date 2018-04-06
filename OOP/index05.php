<?php

class SinhVien{

    // function SinhVien(){
    //     echo "This is constructor";
    // }

    public $name = null;

    function __construct($name){
        // echo "This is constructor";
        // echo "<br>";
        $this->name = $name;
    }


    function getName(){
        return $this->name;
    }

    function __destruct(){
        unset($this->name);
        //echo $this->name;
        // echo "<br>";
        // echo "This is destructor";
    }
}

$sv = new SinhVien('KPT');

echo $sv->getName();


//echo isset($a) ? $a : '';

// $a = 2;

// echo $a;

// unset($a);

// echo $a;

?>