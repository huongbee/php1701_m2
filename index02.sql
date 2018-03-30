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
VALUES ('huong@gmail.com','112121','2017-02-31','Huong Huong','female','92 Le Thi Rieng')

--https://dev.mysql.com/doc/refman/5.7/en/data-types.html
--https://dev.mysql.com/doc/refman/5.7/en/functions.html
--https://dev.mysql.com/doc/refman/5.7/en/sql-syntax-data-definition.html






?>