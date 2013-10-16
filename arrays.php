<?php
require_once("inc/products.php");
$products = get_products_all();
$products = array_reverse($products);
var_dump($products);
?>