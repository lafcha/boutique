<?php
include('./app/persistences/cart.php');

if(!isset($_SESSION['cart'])) {
    initCart();
}
$productsInCart = productsInCart($bdd);
$totalCart = totalCart($bdd);


<<<<<<< HEAD
/** Update quantity's cart **/
$refreshQuantity = filter_input(INPUT_POST, 'Submit');
$newDataQuantity = filter_input(INPUT_POST, 'quantity');
$updateCartQuantity = updateCart($bdd,$newDataQuantity);



include('./resources/views/cart/index.php');
=======
// --- ADD TO CART --- //

// Input filtration
$filteredProductId = filter_input(INPUT_POST, 'productId', FILTER_SANITIZE_NUMBER_INT );
$filteredQuantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT );

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
<<<<<<< HEAD
include('./resources/views/cart/index.php');
>>>>>>> 0de11f4630c5c04b83515917e391f0e8f560417f
=======
>>>>>>> a5296e570826d5f821bc879c9205c6cd785a1da7
