<?php
try{
    $connect = new PDO('mysql:host=localhost;dbname=php1701_banhang','admin','111111');
    $connect->exec('set names utf8');


    //$sql = "SELECT * FROM users WHERE id=?";
    // $sql = "SELECT * FROM users WHERE id=? OR username LIKE ?";

    // $stmt = $connect->prepare($sql);

    // $id = 34;
    // $username = "%admin%";

    // $stmt->bindParam(1,$id,PDO::PARAM_INT); 
    // $stmt->bindParam(2,$username,PDO::PARAM_STR); 
    
    // $result = $stmt->execute();
    // if($result){
    //     $users = $stmt->fetchAll(PDO::FETCH_OBJ);

    //     echo "<pre>";
    //     print_r($users);
    //     echo "</pre>";
    // }



}

catch(Exception $e){
    echo "Connect error ".$e->getMessage();
}
//['php','iOS'];


function loadMoreRows($connect,$sql, $params=[]){
    $stmt = $connect->prepare($sql);

    foreach($params as $key=>$p){
       // echo $key+1;
        //echo $p;
        $stmt->bindValue(($key+1),$p); 
    }
    $result = $stmt->execute();
    if($result){
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    return false;
}

$sql = 'SELECT * FROM users WHERE id=? OR username LIKE ?';
$params = [34,'%admin%'];

$result = loadMoreRows($connect,$sql,$params);
print_r($result);


$sql2 = "SELECT * 
        FROM foods  
        WHERE id_type=? 
        AND price BETWEEN ? AND ?";
        
$params2 = [2,50000,100000];
$result = loadMoreRows($connect,$sql2,$params2);
print_r($result);


?>
