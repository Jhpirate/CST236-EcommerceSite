<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

require_once "../../Utility/autoloader.php";
require_once "../../Utility/header.php";

// get the id and new qty
$productIDtoUpdate = $_GET["productID"];
$newQty = $_GET["updatedQTY"];

// get the users cart and access the update qty method from ShoppingCart
$cart = $_SESSION["userCartStorage"];
$cart->updateQty($productIDtoUpdate, $newQty);

//redirect back to the cart
header("Location: ../../Presentation/Views/ViewCart/showCart.php");