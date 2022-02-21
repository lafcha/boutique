SELECT product.name, product.id
FROM product
INNER JOIN category ON category.id = product.category_id