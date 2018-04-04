<?php


// class SinhVien{
//     //private $id = 123;
//     protected $id = 123;

//     private function getId(){
//         return $this->id;
//     }

// }

// class HocSinh extends SinhVien{
//     //public $id = 321;

// }   
// $hs = new HocSinh;
// echo $hs->id;


// $sv = new SinhVien;
// echo $sv->id;

//print_r($hs);




class SinhVien{
    protected $id = 123;

    function getId(){
        echo __CLASS__;
        return $this->id;
    }

}

class HocSinh extends SinhVien{

    function getId(){
        echo __CLASS__;
        return $this->id;
    }
}   
$hs = new HocSinh;
//echo $hs->id;
echo $hs->getId();
?>