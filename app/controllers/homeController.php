<?php
include('./app/persistences/productData.php');

$productsData = getLastProducts($bdd);

include('./resources/views/home.html.tpl');