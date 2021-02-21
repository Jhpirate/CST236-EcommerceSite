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

    <!-- DataTables JQuery -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bulma.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/dataTables.bulma.min.js"></script>

</head>

<body>

<div class="section" id="Results">
    <div class="container">

        <h1 class="title">Search Results</h1>

        <?php

        // Echo out the value to the user (Mostly for debug purposes)
        echo "<strong>You searched for:</strong> \"" . $cleaned_query . "\"<br>";


        // New instance of our ProductDataAccess
        $productData = new ProductDataAccess();

        $productList = $productData->findProduct($search_query);

        //include_once "_displayProductResults.php";

        if(count($productList) > 0) {
            include_once "_displayProductResults.php"; //table display
            echo count($productList) . " Results Found";
        } else {
            echo "No Results";
        }
        ?>
    </div>
</div>

<!-- Datatables Stuff (Dont really know JavaScript, but it works so there that) -->
<script>
    $(document).ready( function () {
        $('#productsTable').DataTable();
    } );
</script>

</body>
</html>
