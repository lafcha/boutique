<?php
session_start();
include ('config/database.php');
include ('app/persistences/productByCategory.php');
$filterPage = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
$routes = [
    ''  => 'homeController.php',
    null=> 'homeController.php',
    'home' =>  'homeController.php',
    'productPage' => 'productPageController.php',
    'cart'=>'cartController.php',
];
/**
 * Creat variable who call my function for return me all product linked to category
 */
$breads = printProductByCategory($bdd, 1);
$viennoiseries = printProductByCategory($bdd, 2);
$pastries = printProductByCategory($bdd, 3);
$snacks = printProductByCategory($bdd, 4);
$drinks = printProductByCategory($bdd, 5);

require './resources/views/layouts/header.tpl.php';
if (isset($filterPage)) {
    if (!$routes[$filterPage]) {
        require './resources/views/errors/404.html.tpl';
    } else {
        require('app/controllers/' . $routes[$filterPage]);
    }
} else {
    require('./app/controllers/' . $routes[$filterPage]);
}
require  './resources/views/layouts/footer.tpl.php';
