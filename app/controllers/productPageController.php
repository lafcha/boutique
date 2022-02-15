<?php
$filterId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
include('./app/persistences/productData.php');

$productData = getProduct($bdd, $filterId);

$priceWithTax = $productData['price'] + ($productData['price'] * $productData['tva'])/100;



include ('./resources/views/product/product.html.tpl');