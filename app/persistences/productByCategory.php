<?php

function printCategory($bdd)
{
    $results2 = $bdd->query("SELECT name FROM category");
    $data = $results2->fetchAll();

    $result = [];

    foreach ($data as $category):
        $result[] = [
            'name' => $category['name'],
        ];

    endforeach;
    return $result;
}

function printProductByCategory($bdd)
{
    $results2 = $bdd->query("SELECT product.name, category.id FROM product INNER JOIN category ON category.id = product.category_id WHERE category.id in (1,2,3,4,5)");
    $result = $results2->fetchAll(PDO::FETCH_ASSOC);

//     = printCategory($bdd);
//
//    foreach ($data as $category):
//
//        $result['name'][] =[
//            'product' => $category['name'],
//        ];
//
//    endforeach;
    return $result;
}

