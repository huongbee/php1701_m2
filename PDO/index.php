<?php
try{
    $connect = new PDO('mysql:host=localhost;dbname=php1701_banhang','admin','111111');
    $connect->exec('set names utf8');

    $pw = md5(md5('111111').'admin');

    // $sql = "INSERT INTO users(`username`,`password`,fullname,birthdate,gender,address,email,phone)
    // VALUES('admin01','$pw','Admin 01','1998-09-12','nữ','LTR District 1','admin01@gmail.com','1212121212')";
    // //echo $sql;

    // $result = $connect->exec($sql);

    // var_dump($result);

    $sql = "SELECT * FROM users ";
    $stmt = $connect->prepare($sql);
    $result = $stmt->execute();
    if($result){
        //$user = $stmt->fetch();
        //print_r($user);

        $users = $stmt->fetchAll(PDO::FETCH_OBJ);

        echo "<pre>";
        print_r($users);
        echo "</pre>";

        $u = $users[6];
        echo $u->username;
        // foreach($users as $user){
        //     echo $user['username'];
        //     echo "<br>";
        // }

       // echo $users[6]['username'];
        //print_r($user);
        //echo $user['username'];
    }
    else{
        echo "Error";
    }


}
catch(Exception $e){
    echo "Connect error ".$e->getMessage();
}



?>