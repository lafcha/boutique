<?php
include('./app/persistences/productData.php');

$productData = getProduct($bdd, $filterId);

$priceWithTax = $productData['price'] + ($productData['price'] * $productData['tva'])/100;



include ('./resources/views/product/product.html.tpl');