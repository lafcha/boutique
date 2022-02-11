<?php

/**
 * @param $bdd object connection to bdd
 * @param $id int product id
 * @return array data of the product
 */

function getProduct($bdd, $id)
{
    $statement = $bdd->prepare(file_get_contents('database/productPage.sql'));
    $statement->bindValue($id);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

