<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

require_once "../../Utility/autoloader.php";
require_once "../../Utility/header.php";

// Check if a user is logged in and there is an active cart stored in their session
if(isset($_SESSION["userCartStorage"])) {
    $cart = $_SESSION["userCartStorage"];
} else {
    echo "Please login first. Cart is Empty!";
    exit;
}


// First check that a "valid" credit card was entered
// TODO: Pull this out of an included file. Do it here or in the card class
require_once "_validateCreditCard.php"; //partial file


// Get the user information
$cardHolderName = $_POST["fullName"];
$cardHolderEmail = $_POST["email"];
$cardHolderAddress1 = $_POST["address1"];
$cardHolderAddress2 = $_POST["address2"];
$cardHolderState = $_POST["state"];
$cardHolderZip = $_POST["zipCode"];

echo "CHECKOUT PROCESS INITIATED";

// Begin to create the order and order details in the database

// Create a new order object
$orderBS = new OrderBusinessService();
$orderBS->checkout($cart);