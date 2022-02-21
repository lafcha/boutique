<?php


/**
 * récupérer la valeur submit de mon bouton
 */
$refreshQuantity = filter_input(INPUT_POST, 'Submit');



/**
 * Récupérer la nouvelle valeur POST envoyer
 */
$newDataQuantity = filter_input(INPUT_POST, 'quantity');

/**
 *
 */
$pveve = updateCart($bdd,$newDataQuantity)