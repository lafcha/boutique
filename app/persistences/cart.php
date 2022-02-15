<?php
/**
 * Fonction qui initialise le panier
 * @return void
 */
function initCart()
{
    $_SESSION['cart'] = [];
}

/**
 * Fonction qui peuple le panier avec des données de test
 * @return void
 */
function fakeCart()
{
    $_SESSION['cart']["3"] = 4;
    $_SESSION['cart']["5"] = 2;
    $_SESSION['cart']["7"] = 3;
}

/**
 * Fonction qui retourne un tableau avec le total en € du panier et le nombre de produit pour l'afficher dans le header du site
 * @param $bdd
 * @return array
 */
function totalCart($bdd)
{
    $resultquery = $bdd->query("SELECT id, (1+tva)*price AS prixTTC FROM product WHERE id in (". implode(",",array_keys($_SESSION['cart'])) .")");
    $data = $resultquery->fetchAll();

    $result = [
        'quantityTotaleProduct' => 0,
        'totalPriceCart' => 0,
    ];

    foreach($data as $product) {
        $result['quantityTotaleProduct'] += $_SESSION['cart'][$product['id']];
        $result['totalPriceCart'] += $product['prixTTC'];
    }

    return $result;
}