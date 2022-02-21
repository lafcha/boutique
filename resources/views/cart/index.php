<h2 class="text-center">PANIER</h2>
<?php


foreach ( $productsInCart as $product) :
?>

<div class="card" >
    <div class="card-body">
        <h5 class="card-title"><?=$product['name'];?></h5>
        <p class="card-text">prix TTC = <?=$product['price'];?> €</p>
        <p class="card-text">Quantite produit = <?=$product['quantity'];?></p>
        <p class="card-text">Prix total produit = <?=$product['totalPrice'];?> €</p>
        <form action="/index.php?action=cart" method="POST" class="col-9 d-flex justify-content-end">
            <input type="submit" class="btn btn-primary text-light form-control"
                   value="Supprimer">
            <input type="hidden" id="productId" name="productId" value="<?= $product['id']?>">
            <input type="hidden" id="quantity" name="quantity" value="<?= $product['quantity']?>">
            <input type="hidden" id="delete" name="delete" value="">

        </form>
    </div>
</div>
<?php
endforeach;
?>
<div class="card" >
    <div class="card-body">
        <h5 class="card-title">TOTAL PANIER</h5>
        <p class="card-text">Quantité totale de produits = <?= $totalCart['quantityTotaleProduct'] ?></p>
        <p class="card-text">Prix total de panier =  <?= $totalCart['totalPriceCart'] ?> €</p>
    </div>
</div>
