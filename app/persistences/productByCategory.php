<?php

function printProductByCategory($bdd, $id){
    $queryPrintProductByCategory = file_get_contents('database/productByCategory.sql');
    $results2 = $bdd->query($queryPrintProductByCategory. "WHERE category.id = $id") ;
    $printProductByCat = $results2->fetchAll(PDO::FETCH_ASSOC);
    return $printProductByCat;
}