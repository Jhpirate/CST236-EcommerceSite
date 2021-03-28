<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

include_once "../../../Utility/autoloader.php";

echo $_SERVER["DOCUMENT_ROOT"];

$file = $_SERVER["DOCUMENT_ROOT"] . "/BusinessServices/ShoppingCart.php";

echo "<br>FilePath: " . $file;

if(file_exists($file)) {
    echo "<br>Valid";
} else {
    echo "<br>Not Valid";
}

$cart = new ShoppingCart(12);
$productAccess = new ProductDataAccess();

var_dump($cart);

phpinfo();