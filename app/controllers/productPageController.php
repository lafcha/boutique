<?php
include('./app/persistences/productData.php');

$productData = getProduct($bdd, $filterId);


include ('./resources/views/product/product.html.tpl');