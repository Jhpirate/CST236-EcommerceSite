<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

// TEMP HEADER UNTIL I GET AUTOLOADER WORKING (INCLUDE OUR UserDataAccess class file)
require_once "../../DataAccess/ProductDataAccess.php";


// Get the values sent by the form
$search_query = $_GET["searchQuery"];
$cleaned_query = htmlspecialchars($search_query); // somewhat cleaner string value

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search | Results</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>

<body>

<div class="section" id="Results">
    <div class="container">
        <?php

        // Echo out the value to the user (Mostly for debug purposes)
        echo "<strong>You searched for:</strong> \"" . $cleaned_query . "\"<br>";


        // New instance of our ProductDataAccess
        $productData = new ProductDataAccess();

        $productList = $productData->findProduct($search_query);

        //include_once "_displayProductResults.php";

        if(count($productList) > 0) {
            include_once "_displayProductResults.php";
            echo count($productList) . " Results Found";
        } else {
            echo "No Results";
        }
        ?>
    </div>
</div>

</body>
</html>
