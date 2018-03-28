<?php

$sql = "CREATE TABLE `php1701`.`users` (
     `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ma so user' , 
     `email` VARCHAR(50) NOT NULL , 
     `password` VARCHAR(100) NULL DEFAULT NULL , 
     `birthdate` DATE NULL DEFAULT NULL , 
     `fullname` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
     `gender` VARCHAR NULL DEFAULT 'nam' , 
     `update_at` INT NOT NULL DEFAULT CURRENT_TIMESTAMP , 
     PRIMARY KEY (`id`), 
     UNIQUE `unique` (`email`)
) ENGINE = InnoDB COMMENT = 'luu thong tin user';";

//id, user_id, title, author, detail, create_at
?>