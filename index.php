<?php

$sql = "CREATE TABLE `php1701`.`users` (
     `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ma so user' , 
     `email` VARCHAR(50) NOT NULL , 
     `password` VARCHAR(100) NULL DEFAULT NULL , 
     `birthdate` DATE NULL DEFAULT NULL , 
     `fullname` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
     `gender` VARCHAR NULL DEFAULT 'nam' , 
     `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
     PRIMARY KEY (`id`), 
     UNIQUE `unique` (`email`)
) ENGINE = InnoDB COMMENT = 'luu thong tin user';";

//id, user_id, title, author, detail, update_at, create_at

$sql2 = "CREATE TABLE posts(
        `id` INT(11) AUTO_INCREMENT,
        `user_id` INT(11) UNSIGNED NOT NULL,
        `title` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
        `author` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
        `detail` TEXT(500) CHARACTER SET utf8 COLLATE utf8_general_ci,
        `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
        PRIMARY KEY (`id`)
    )";

$sql3 = "ALTER TABLE posts
        ADD create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP";

$sql4 = "ALTER TABLE posts 
        ADD FOREIGN KEY (user_id) REFERENCES users(id)";

?>