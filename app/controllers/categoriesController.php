<?php

include ('app/persistences/productByCategory.php');
/**
 * Creat variable who call my function for return me all product linked to category
 */

$printCategory = printCategory($bdd);
$printProductByCategory =printProductByCategory($bdd);
xdebug_var_dump($printProductByCategory);