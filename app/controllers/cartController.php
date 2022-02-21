<?php
include('./app/persistences/cart.php');

if(!isset($_SESSION['cart'])) {
    initCart();
}
$productsInCart = productsInCart($bdd);
$totalCart = totalCart($bdd);

xdebug_var_dump($_POST['delete']);
// --- ADD TO CART --- //

// Input filtration
$filteredProductId = filter_input(INPUT_POST, 'productId', FILTER_SANITIZE_NUMBER_INT );
$filteredQuantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT );

if(isset($_POST['delete'])) {
    $removeFromCart = removeFromCart($filteredProductId, $filteredQuantity);
    include('./resources/views/cart/index.php');
}

if (isset($filteredProductId)) {
    //If validation or filtration fails, the user is sent to the same page he already is
    if (!$filteredProductId || !$filteredQuantity) {
            include('./resources/views/errors/404.html.tpl');
    } else {
     // if ok, product is added / created in cart & user sent to cart page
        addToCart($filteredProductId,$filteredQuantity );
        $productsInCart = productsInCart($bdd);
        $totalCart = totalCart($bdd);
        include('./resources/views/cart/index.php');
    }
} else {
    include('./resources/views/cart/index.php');
}
