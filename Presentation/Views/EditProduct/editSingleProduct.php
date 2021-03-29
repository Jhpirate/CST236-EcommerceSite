<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */
require_once "../../../DataAccess/ProductDataAccess.php"; //TEMPORARY

// Get product ID we wish to edit
$productToEdit = $_GET["productID"];

// New instance of our ProductDataAccess
$productAccess = new ProductDataAccess();

// Get array of our selected product to edit
$currentProduct = $productAccess->findProductByID($productToEdit);

$productID = $currentProduct[0]["ID"];
$productName = $currentProduct[0]["product_name"];
$productColor = $currentProduct[0]["color"];
$productSize = $currentProduct[0]["size"];
$productPrice = $currentProduct[0]["price"];
$productDescription = $currentProduct[0]["product_description"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>

<section class="section">
    <div class="container">

        <!-- -->
        <h1 class="title">Currently
            Editing: <?php echo is_null($productID) ? "PRODUCT_NAME [ID_NUMBER]" : $productName . " [" . $productID . "]" ?></h1>

        <div class="columns">

            <!-- Column 1 (Photo?) -->
            <div class="column">
                <figure class="is-square">
                    <img src="../Images/ProductPlaceholder.svg">
                </figure>
            </div>

            <!-- Column 2 (Text/Description) -->
            <div class="column is-black">
                <form method="get" id="updateExistingProduct" action="../../Handlers/updateSingleProduct.php">
                    <!-- Product ID Field Input -->
                    <label class='label' for="productID">Item ID</label>
                    <input class='input' type="text"
                           value="<?php echo is_null($productID) ? "PRODUCT_ID" : $productID ?>" name="productID" readonly>

                    <!-- Product Name -->
                    <label class="label" for="productName" id="productName">Product Name</label>
                    <input class='input' type="text"
                           value="<?php echo is_null($productName) ? "PRODUCT_NAME" : $productName ?>" name="productName">

                    <!-- Product Size -->
                    <label class="label" for="productSize" id="productSize">Product Size</label>
                    <input class='input' type="text"
                           value="<?php echo is_null($productSize) ? "PRODUCT_SIZE" : $productSize ?>" name="productSize">

                    <!-- Product Color -->
                    <label class="label" for="productColor" id="productColor">Product Color</label>
                    <input class='input' type="text"
                           value="<?php echo is_null($productColor) ? "PRODUCT_COLOR" : $productColor ?>" name="productColor">

                    <!-- Product Price -->
                    <label class="label" for="productPrice" id="productPrice">Product Price</label>
                    <input class='input' type="number" step="0.01"
                           value="<?php echo is_null($productPrice) ? "PRODUCT_PRICE" : $productPrice ?>" name="productPrice">

                    <!-- Product Description -->
                    <label class="label" for="productDescription" id="productDescription">Product Description</label>
                    <textarea class="textarea" name="productDescription"><?php echo is_null($productDescription) ? "PRODUCT_DESCRIPTION" : $productDescription ?></textarea>

                    <!-- Edit/Cancel buttons -->
                    <br>
                    <div class="columns">
                        <div class="column">
                            <button class="button is-danger is-fullwidth">Cancel</button>
                        </div>
                        <div class="column">
                            <input type='submit' class="button is-primary is-fullwidth" value="Save / Exit">
                        </div>
                    </div>
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
