SELECT product.name as name, category.name as category, product.id as id,
       product.price, product.tva, product.weight, product.description
FROM product
         INNER JOIN category ON category_id = category.id
WHERE product.id = :id
