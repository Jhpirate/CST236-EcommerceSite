<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

require_once "../../DataAccess/ProductDataAccess.php"; //temp until autoloader works
$productUpdate = new ProductDataAccess();

// Get values to be updated
$productID = $_GET["productID"];

$updatedProductName = $_GET["productName"];
$updatedProductSize = $_GET["productSize"];
$updatedProductColor = $_GET["productColor"];
$updatedProductPrice = $_GET["productPrice"];
$updatedProductDesc = $_GET["productDescription"];

//Update the product
$productUpdate->updateProductByID($productID, $updatedProductName, $updatedProductDesc, $updatedProductSize, $updatedProductColor, $updatedProductPrice);

?>

<!-- Show success message on product update then redirect -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Update Success</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>

<sction class="hero is-success is-fullheight" id="productUpdateSuccess">
    <div class="hero-body">
        <div class="">
            <p class="title">
                Product Update Success
            </p>
            <p class="subtitle">
                Product has successfully been updated. You should be automatically redirected in 3 seconds...
            </p>
        </div>
    </div>
</sction>

</body>

<script>
    setTimeout(function (){ window.location.href= '../Views/EditProduct/editProducts.php';},3000);
</script>

</html>

<?php
//sleep(3);
//header("refresh:5;url:../Views/EditProduct/editProducts.php");
//header("Location:../Views/EditProduct/editProducts.php");
?>