<?php
include('./app/persistences/cart.php');

initCart();
fakeCart();
$totalCart=totalCart($bdd);


include('./resources/views/cart/index.php');