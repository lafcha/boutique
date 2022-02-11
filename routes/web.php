<?php
$filterPage = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

$routes = [
    ''=> 'homeController.php',
    'null'=> 'homeController.php',
    'home' =>  'homeController.php',

];
require './resources/views/layouts/header.html.tpl';
if (isset($filterPage)) {
    if (!$routes[$filterPage]) {
        require './resources/views/errors/404.html.tpl';
    } else {
        require('app/controllers/' . $routes[$filterPage]);
    }
} else {
    require('./app/controllers/' . $routes[$filterPage]);
}
require  './resources/views/layouts/footer.html.tpl';