SELECT product.name
FROM product
INNER JOIN category ON category.id = product.category_id

