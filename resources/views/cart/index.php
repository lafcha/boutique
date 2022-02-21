<h1 class="text-center text-primary">PANIER</h1>

<?php

foreach ($productsInCart as $product) :
    ?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?= $product['name']; ?></h5>
            <p class="card-text">prix TTC = <?= $product['price']; ?> €</p>
            <p class="card-text">Quantite produit =
            <form method="post" action="http://boutique.local/?action=cart">
                <input type="number" name="quantity" value="<?php echo $product['quantity']; ?>">
                <input type="hidden" name="productId" value="<?=$product['id']?>">
                <input type="hidden" name="update" value="1">
                <input type="submit" value="Actualiser" name="Submit">
            </form>
            </p>

            <p class="card-text">Prix total produit = <?= $product['totalPrice']; ?> €</p>
        </div>
    </div>
<?php
endforeach;
?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">TOTAL PANIER</h5>
        <p class="card-text">Quantité totale de produits = <?= $totalCart['productsQuantity'] ?></p>
        <p class="card-text">Prix total de panier =  <?= $totalCart['cartTotal'] ?> €</p>

    </div>
</div>
