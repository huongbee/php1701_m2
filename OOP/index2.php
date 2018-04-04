<?php

class Sinhvien{
    protected $mssv = 100000;

    protected function getMSSV(){
        return $this->mssv;
    }

    function setMSSV($maso){
        $this->mssv = $maso;
    }

    function getMSSV2(){
        return $this->getMSSV();
    }

}

$sv = new Sinhvien;
echo $sv->getMSSV2();

echo "<br>";

$sv->setMSSV(12345);
echo $sv->getMSSV2();


//echo $sv->mssv; // not access


?>