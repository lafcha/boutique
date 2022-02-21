<?php
session_start();
include ('config/database.php');
$filterPage = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
$routes = [
    ''  => 'homeController.php',
    null=> 'homeController.php',
    'home' =>  'homeController.php',
    'productPage' => 'productPageController.php',
    'cart'=>'cartController.php',
];


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
