<?php
class DBConnect{

    private $connect;

    function __construct($dbName = 'php1701_banhang',$user = 'root',$password = ''){
        try{
            $this->connect = new PDO("mysql:host=localhost;dbname=$dbName",$user,$password);
            $this->connect->exec('set names utf8');
        }
        catch(Exception $e){
            echo $e->getMessage();
            die;
        }
    }

    //INSERT | UPDATE | DELETE
    function executeQuery($query,$params = []){
        $stmt = $this->connect->prepare($query);
        foreach($params as $key => $p){
            $stmt->bindParam($key+1,$p);             
        }
        return $stmt->execute(); //bool(true/false)
    }



    // SELECT 1 ROW

    // SELECT MORE ROWS

}








?>