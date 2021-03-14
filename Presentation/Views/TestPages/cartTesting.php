<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

//require_once "../../../BusinessServices/Model/ShoppingCart.php";
//require_once "../../../BusinessServices/Model/Product.php";
//require_once "../../../DataAccess/ProductDataAccess.php";

include_once "../../../Utility/autoloader.php";

$cart = new ShoppingCart(22);
$productAccess = new ProductDataAccess();

$product1 = $productAccess->findProductByID_obj(12);

// TEST PRODUCT OBJECT
//echo "<pre>";
//print_r($product1);
//echo "</pre>";

//TEST CART OBJECT
$cart->addItemToCart(12);
$cart->addItemToCart(12);
$cart->addItemToCart(32);
$cart->addItemToCart(13);
$cart->addItemToCart(77);

$cart->updateQty(13, 123);
$cart->updateQty(12, 0);

$cart->calculateCartTotals();

echo "<pre>";
print_r($cart);
echo "</pre>";