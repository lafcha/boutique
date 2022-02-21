<?php
include('./app/persistences/cart.php');

initCart();
fakeCart();
$totalCart=totalCart($bdd);
$productsInCart=productsInCart($bdd);

/** Update quantity's cart **/
$refreshQuantity = filter_input(INPUT_POST, 'Submit');
$newDataQuantity = filter_input(INPUT_POST, 'quantity');
$updateCartQuantity = updateCart($bdd,$newDataQuantity);



include('./resources/views/cart/index.php');