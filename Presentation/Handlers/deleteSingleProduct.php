<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */
require_once "../../DataAccess/ProductDataAccess.php";
$productAccess = new ProductDataAccess();

// get the ID of the product to delete
$productToDelete = $_GET["productID"];
echo "Delete this ID:" . $productToDelete;
$productAccess->deleteProductByID($productToDelete);

header("Location: ../Views/EditProduct/editProducts.php");
