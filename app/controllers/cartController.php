<?php
include('./app/persistences/cart.php');
initCart();
fakeCart();
var_dump($_SESSION);
$totalCart=totalCart($bdd);


include('./resources/views/cart/index.php');