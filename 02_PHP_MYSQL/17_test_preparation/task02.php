1.	Пребройте продуктите в БД започващи с 

SELECT COUNT(product_id) as b_products FROM `products` WHERE `product_name` LIKE 'Б%' AND date_deleted IS NULL

2.	Изведете информация за рецептите в категория ‘Супи’, включително информация за продуктите за всяка рецепта. Отстранете от заявката повтарящата се информация - например първичните ключове на всяка от таблиците.

SELECT r.recipe_id, r.recipe_name, r.prep_time, r.date_created, rc.recipe_category_name, rp.`product_quantity`, p.`product_name`, p.`product_price`, p.`product_calories`, u.unit_name FROM `recipes` r JOIN recipe_categories rc ON ( r.`recipe_category_id` = rc.recipe_category_id) JOIN recipes_products rp ON (r.recipe_id = rp.recipe_id ) JOIN products p ON ( rp.product_id=p.product_id ) JOIN units u on rp.unit_id=u.unit_id WHERE rc.`recipe_category_name` = 'десерти' AND r.date_deleted IS NULL

3.	Пребройте рецептите по типове ястия – в резултатът да са видими и имената на типовете ястия

SELECT COUNT(r.recipe_id) AS recipes_num, rc.recipe_category_name FROM `recipes` r JOIN recipe_categories rc ON (r.recipe_category_id=rc.recipe_category_id) GROUP BY r.recipe_category_id

4.	Изведете името и времето за приготвяне на двете най-стари рецепти, въведени в базата данни.

SELECT recipe_name, prep_time FROM `recipes` ORDER BY `date_created` ASC LIMIT 2