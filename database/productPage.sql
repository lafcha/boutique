SELECT product.name as name, category.name as category, product.id,
       product.price, product.tva, product.weight
FROM product
         INNER JOIN category ON category_id = category.id
WHERE product.id = 1
