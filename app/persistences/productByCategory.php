<?php

function printCategory($bdd)
{
    $results2 = $bdd->query("SELECT name, id FROM category");
    $data = $results2->fetchAll();

    if (!isset($_SESSION['categorie'])) {
        foreach ($data as $category) {
            $_SESSION['categorie'][$category['name']] = $category['id'];
        }
    }
    return $_SESSION;
}

function printProductByCategory($bdd, $catname)
{
    $results2 = $bdd->prepare("SELECT product.name, product.id FROM product INNER JOIN category ON category.id = product.category_id WHERE category.id = :catname");
    $results2->bindParam('catname', $catname, PDO::PARAM_INT);
    $results2->execute();
    $result = $results2->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

