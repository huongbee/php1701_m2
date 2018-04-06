<?php

// abstract class Luat{
//     public $name = '';
//     abstract function vutRacVaoGio();
//     abstract function vutRacVaoGio2();
//      function vutRacVaoGio3(){
//          echo "3";
//      }
    
// }

// class LuatP4 extends Luat{
//     function vutRacVaoGio(){
//         echo "...";
//     }
//     function vutRacVaoGio2(){
//         echo "...";
//     }

//     function luat2(){
//         echo "luat 2";
//     }
// }

// $l4 = new LuatP4;
// echo $l4->vutRacVaoGio();
// echo $l4->luat2();


interface Luat{
    //public $name;
    function luat1();
    function luat2();
}

interface Luatn{
    function luat1();
    function luat2();
    function luat3();
    
}


class LuatCon implements Luat,Luatn{
    function luat1(){
        echo "luat1";
    }

    function luat2(){
        echo 'luat2';
    }

    function luat3(){
        echo 'luat3';
    }
} 

$l = new LuatCon;



?>