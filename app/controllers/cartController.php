<?php
include('./app/persistences/cart.php');
$totalCart=totalCart($bdd);


include('./resources/views/cart/index.php');