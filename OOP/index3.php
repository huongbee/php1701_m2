<?php

class SinhVien{
    public $id = 123;

    function getId(){
        return $this->id;
    }

}

class HocSinh extends SinhVien{

}

class HocVien extends SinhVien{
    
}



$hs = new HocSinh;
echo $hs->getId();

print_r($hs);




?>