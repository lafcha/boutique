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
    $_SESSION['cart']['8'] = 2;
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
        $qt = $_SESSION['cart'][$product['id']];
        $result['quantityTotaleProduct'] += $qt;
        $result['totalPriceCart'] += $product['prixTTC'] * $qt;
    }

    return $result;
}

/**
 * Fonction qui retourne un tableau avec les informations sur les produits du panier (nom, prix TTC, quantité, prix total)
 * @param $bdd
 * @return array
 */
function productsInCart($bdd){

    $resultquery = $bdd->query("select name, id, (1+tva)*price AS prixTTC from product where id in (". implode(",",array_keys($_SESSION['cart'])) . ")");
    $data = $resultquery->fetchAll();

    $result = [];

    foreach($data as $product) {
        $qt = $_SESSION['cart'][$product['id']];
        $result[] = [
            'name' => $product['name'],
            'price' => $product['prixTTC'],
            'quantity' => $qt,
            'totalPrice' => $product['prixTTC'] * $qt,
        ];
    }
    return $result;

}

function updateCart($bdd,$newDataQuantity){
    $bdd->query("UPDATE order_has_product SET quantity ='$newDataQuantity' where product.id in (". implode(",",array_keys($_SESSION['cart'])) . ")");


}