<?php
include('./app/persistences/productData.php');
include('./app/persistences/cart.php');

$productsData = getLastProducts($bdd);

addToCart(3,5);


include('./resources/views/home.html.tpl');