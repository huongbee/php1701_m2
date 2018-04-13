<?php

require 'connect.php';

$db = new DBConnect;

//$query = "DELETE FROM users WHERE id=33";
$query = "INSERT INTO users(
        `username`,
        `password`,
        fullname,
        birthdate,
        gender,
        address,
        email,
        phone
    ) 
    VALUES(?,?,?,?,?,?,?,?)";
$params = ['admin02','13212121','Huong','1996-04-13','nữ', "LTR Q1",'admin02@gmail.com','23456788765'];

$result = $db->executeQuery($query);
// if($result) echo 'success';
// else echo 'error';

echo $result ? 'success':"error";
