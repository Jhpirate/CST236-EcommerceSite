<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

require_once "../../Utility/autoloader.php";
require_once "../../Utility/header.php";

// Get product ID from clicked add to cart button
$productID = $_GET["productID"];

// Check if user cart session already exists
if(isset($_SESSION["userCartStorage"])) {
    $cart = $_SESSION["userCartStorage"];
} else {
    // make sure a user is logged in first
    if(isset($_SESSION["userID"])){
        $cart = new ShoppingCart($_SESSION["userID"]);
    } else {
        echo "You must first login or register before adding item to your cart";
        exit;
    }
}

// Add selected item to the users cart
$cart->addItemToCart($productID);
$cart->calculateCartTotals();

$_SESSION["userCartStorage"] = $cart;

// DEBUG PRINT - MAKE SURE ITEMS ARE ADDED TO CART
//echo "<pre>";
//print_r($cart);
//echo "</pre>";

header("Location: ../../Presentation/Views/ViewCart/showCart.php");
