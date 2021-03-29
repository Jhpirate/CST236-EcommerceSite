<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

require_once "../../../DataAccess/ProductDataAccess.php"; //TEMPORARY

// Get the value from the URL
$productID = $_GET["productID"];

// DEBUG: Print out the current selected item
//echo "Product Is: " . $productID;

// New instance of our ProductDataAccess
$productAccess = new ProductDataAccess();

// Get array of our selected product
$currentProduct = $productAccess->findProductByID($productID);

// Store array vars in separate variables
$currentProductID = $currentProduct[0]["ID"];
$currentProductName = $currentProduct[0]["product_name"];
$currentProductDesc = $currentProduct[0]["product_description"];
$currentProductSize = $currentProduct[0]["size"];
$currentProductColor = $currentProduct[0]["color"];
$currentProductPrice = $currentProduct[0]["price"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <?php include "../../../_navigationBar.php"; ?>

</head>
<body>

<section class="section">
    <div class="container">

        <h1 class="title"><?php echo is_null($currentProductName) ? "DEFAULT ITEM" : $currentProductName ?></h1>

        <div class="columns">
            <!-- Column 1 (Photo?) -->
            <div class="column">
                <figure class="is-square">
                    <img src="../Images/ProductPlaceholder.svg" alt="PlaceHolderLogo">
                </figure>
            </div>

            <!-- Column 2 (Text/Description) -->
            <div class="column is-black">
                <p><strong>Item ID</strong></p>
                <p><?php echo is_null($currentProductID) ? "DEFAULT_ID" : $currentProductID ?></p>
                <br>

                <p><strong>Size</strong></p>
                <p><?php echo is_null($currentProductSize) ? "DEFAULT_SIZE" : $currentProductSize ?></p>
                <br>

                <p><strong>Color</strong></p>
                <p><?php echo is_null($currentProductColor) ? "DEFAULT_COLOR" : $currentProductColor ?></p>
                <br>

                <p><strong>Price</strong></p>
                <p>$<?php echo is_null($currentProductPrice) ? "000.00" : $currentProductPrice ?></p>
                <br>

                <p><strong>Description</strong></p>
                <p>
                    <?php echo is_null($currentProductDesc) ? "DEFAULT_DESC" : $currentProductDesc ?>
                </p>
                <br>

                <form method="get" action="/CST236-EcommerceSite/Presentation/Handlers/addToCart.php">
                    <input type="hidden" name="productID" value="<?php echo $currentProductID?>">
                    <input class="button input is-primary" type="submit" value="Add to Cart">
                </form>

            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="content has-text-centered">
        <p>Test Footer</p>
    </div>
</footer>

</body>
</html>
