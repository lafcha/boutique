<?php
include('./app/persistences/cart.php');

initCart();
fakeCart();
$totalCart=totalCart($bdd);
$productsInCart=productsInCart($bdd);

include('./resources/views/cart/index.php');