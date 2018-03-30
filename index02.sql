<?php

INSERT INTO table(id, name, address)
VALUES (1,'nguyen A', '.....');

INSERT INTO table
VALUES ('nguyen A', '.....');

UPDATE table 
SET column1 = value1,
    column2 = value2
WHERE dieukien

dieukien:
= >= <= > < ....
IN(1,2,3)
NOTIN(2,3,4)

AND  OR

BETWEEN min AND max

LIKE 
NOTLIKE


DELETE FROM table
WHERE dieukien

SELECT list_of_columns
FROM table
[WHERE dieukien]
[GROUP BY(column)]
[HAVING dieukien2] --dieukien2: dieu kien cho group by


SELECT list_of_columns
FROM table
JOIN another_table
ON dieukien_lienket
[WHERE dieukien]
[GROUP BY(column)]
[HAVING dieukien2]



INSERT INTO users(email,password,birthdate,fullname,gender,address)
VALUES ('huong02@gmail.com','112121','2017-05-31','Huong Huong','female','92 Le Thi Rieng')


--https://dev.mysql.com/doc/refman/5.7/en/data-types.html
--https://dev.mysql.com/doc/refman/5.7/en/functions.html
--https://dev.mysql.com/doc/refman/5.7/en/sql-syntax-data-definition.html



UPDATE users
SET birthdate = '2017-10-24',
    address = "90 LTR"
WHERE email = 'huong@gmail.com'

DELETE FROM users
WHERE email LIKE "%huong%" 


SELECT * FROM users
WHERE id=6


SELECT email,fullname FROM users
WHERE id=6

SELECT * FROM `users`
WHERE id =6 OR id=8

SELECT * FROM `users`
WHERE id IN(6,8)

?>