<<<<<<< HEAD
<<<<<<< HEAD
<h1 class="text-center">PANIER</h1>
=======

<<<<<<< HEAD
<h1 class="text-center text-primary">PANIER</h1>
>>>>>>> 0de11f4630c5c04b83515917e391f0e8f560417f

<?php

foreach ($productsInCart as $product) :

<<<<<<< HEAD
    xdebug_var_dump($productsInCart);

    xdebug_var_dump($product);

    ?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?= $product['name']; ?></h5>
            <p class="card-text">prix TTC = <?= $product['price']; ?> €</p>
            <p class="card-text">Quantite produit =
            <form method="post" action="http://boutique.local/?action=cart">
                <input type="number" name="quantity" value="<?php if (!isset($refreshQuantity)) : echo $product['quantity']; else : echo $newDataQuantity;  endif; ?>">
                <input type="submit" value="Actualiser" name="Submit">
            </form>
            </p>

            <p class="card-text">Prix total produit = <?= $product['totalPrice']; ?> €</p>
        </div>
=======
=======
<h2 class="text-center">PANIER</h2>
<?php

>>>>>>> a5296e570826d5f821bc879c9205c6cd785a1da7

foreach ( $productsInCart as $product) :
?>


<div class="card" >
    <div class="card-body">
        <h5 class="card-title"><?=$product['name'];?></h5>
        <p class="card-text">prix TTC = <?=$product['price'];?> €</p>
        <p class="card-text">Quantite produit = <?=$product['quantity'];?></p>
        <p class="card-text">Prix total produit = <?=$product['totalPrice'];?> €</p>
>>>>>>> 0de11f4630c5c04b83515917e391f0e8f560417f
    </div>
<?php
endforeach;
?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">TOTAL PANIER</h5>
        <p class="card-text">Quantité totale de produits = <?= $totalCart['quantityTotaleProduct'] ?></p>
        <p class="card-text">Prix total de panier = <?= $totalCart['totalPriceCart'] ?> €</p>
    </div>
</div>
