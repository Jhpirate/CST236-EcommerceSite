<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

//TODO: REMOVE THIS ONCE AUTOLOADER IS DONE BEING A POS
require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/BusinessServices/CCVerificationBusinessService.php";

require_once "../../Utility/autoloader.php";
require_once "../../Utility/header.php";

// We will not actually be validating any credit card information here
// Just check and see that all fields came back with values
// If they all had values, then credit check is true

// Get the card info from the checkout form
$cardNumber = $_POST["creditCardNum"];
$cardCVV = $_POST["creditCardCVV"];
$cardExpirationMonth = $_POST["creditCardExpMonth"];
$cardExpirationYear = $_POST["creditCardExpYear"];


// Credit Card verification business service
$CCVerificationBS = new CCVerificationBusinessService($cardNumber, $cardCVV, $cardExpirationMonth, $cardExpirationYear);

// Check if the card is valid
// If not valid, stop execution
if(!$CCVerificationBS->validateCC()) {
    echo "Card details incomplete";
    exit;
}
