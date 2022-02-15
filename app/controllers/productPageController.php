<?php
include('./app/persistences/productData.php');

$productDataFromBDD = getProduct($bdd, $filterId);

$productData = $productDataFromBDD[0];

$priceWithTax = $productData['price'] + ($productData['price'] * $productData['tva'])/100;



include ('./resources/views/product/product.html.tpl');