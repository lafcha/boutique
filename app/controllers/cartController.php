<?php
include('./app/persistences/cart.php');

if(!isset($_SESSION['cart'])) {
    initCart();
};

$productsInCart = productsInCart($bdd);
$totalCart = totalCart($bdd);

// ---  UPDATE CART --- //

$refreshQuantity = filter_input(INPUT_POST, 'Submit');
/** récupérer la valeur submit de mon bouton  */

$newDataQuantity = filter_input(INPUT_POST, 'quantity');
/*** Récupérer la nouvelle valeur POST envoyer */

//$updateCart = updateCart($bdd,$newDataQuantity);

// --- ADD TO CART --- //

// Input filtration
$filteredProductId = filter_input(INPUT_POST, 'productId', FILTER_SANITIZE_NUMBER_INT );
$filteredQuantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT );
$update = filter_input(INPUT_POST, 'update', FILTER_SANITIZE_NUMBER_INT );


if (isset($filteredProductId)) {
    //If validation or filtration fails, the user is sent to the same page he already is
    if (!$filteredProductId || !$filteredQuantity) {
            include('./resources/views/errors/404.html.tpl');
    } else {
     // if ok, product is added / created in cart & user sent to cart page
        //addToCart($filteredProductId,$filteredQuantity );
        addAndUpdateCart($filteredProductId,$filteredQuantity, $update);
        if(isset($_POST['delete'])) {
            removeFromCart($filteredProductId, $filteredQuantity);
        }
        $productsInCart = productsInCart($bdd);
        $totalCart = totalCart($bdd);

        include('./resources/views/cart/index.php');
    }
} else {
    include('./resources/views/cart/index.php');
}
