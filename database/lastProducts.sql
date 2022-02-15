SELECT product.name as name, category.name as category, product.id, category.id,product.price*product.tva+product.price AS 'price',
       product.weight, product.description, product.id AS id
FROM product
         INNER JOIN category ON category_id = category.id
ORDER BY product.id DESC
Limit 10