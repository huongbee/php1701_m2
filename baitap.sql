--1
SELECT * FROM foods

--1.1

--3
SELECT name,address, phone 
FROM customers 
ORDER BY name ASC 


DELETE FROM bills WHERE id_customer >=45;
DELETE FROM customers WHERE id >=45;


--2
SELECT food_type.name AS tenloai, foods.name AS tenmon
FROM foods, food_type
WHERE foods.id_type = food_type.id

SELECT food_type.name AS tenloai, foods.name AS tenmon
FROM food_type
INNER JOIN foods
ON foods.id_type = food_type.id


SELECT t.name AS tenloai, f.name AS tenmon
FROM food_type t
INNER JOIN foods f
ON f.id_type = t.id