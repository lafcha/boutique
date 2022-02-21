<h2 class="text-center">PANIER</h2>
<?php

xdebug_var_dump($totalCart);

foreach ( $productsInCart as $product) :
?>


<div class="card" >
    <div class="card-body">
        <h5 class="card-title"><?=$product['name'];?></h5>
        <p class="card-text">prix TTC = <?=$product['price'];?> €</p>
        <p class="card-text">Quantite produit = <?=$product['quantity'];?></p>
        <p class="card-text">Prix total produit = <?=$product['totalPrice'];?> €</p>
    </div>
</div>
<?php
endforeach;
?>
<div class="card" >
    <div class="card-body">
        <h5 class="card-title">TOTAL PANIER</h5>
        <p class="card-text">Quantité totale de produits = <?= $totalCart['productsQuantity'] ?></p>
        <p class="card-text">Prix total de panier =  <?= $totalCart['cartTotal'] ?> €</p>
    </div>
</div>
