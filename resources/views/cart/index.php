
<h1 class="text-center">PANIER</h1>

<?php

//for($i=0, $_SESSION['cart'][$i], $i . 1) :

?>
<div class="card" >
    <div class="card-body">
        <h5 class="card-title">NOM PRODUIT</h5>
        <p class="card-text">prix TTC</p>
        <p class="card-text">Quantite produit</p>
        <p class="card-text">Prix total produit</p>
    </div>
</div>
<?php
//endfor;
?>
<div class="card" >
    <div class="card-body">
        <h5 class="card-title">TOTAL PANIER</h5>
        <p class="card-text">Quantité totale de produits = <?= $totalCart['quantityTotaleProduct'] ?></p>
        <p class="card-text">Prix total de panier =  <?= $totalCart['totalPriceCart'] ?></p>
    </div>
</div>
