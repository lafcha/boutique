<?php

include('./app/persistences/productData.php');

$variable = lastBlogPosts($bdd2);
var_dump($variable);

include('./resources/views/home.html.tpl');