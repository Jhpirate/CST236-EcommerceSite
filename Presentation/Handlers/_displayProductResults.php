<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

// Expecting $productList which is an array of products

?>

<table class="table" id="productsTable">
    <thead>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Product Description</th>
        <th>Size</th>
        <th>Color</th>
        <th>Price</th>
        <th>View More</th>
    </tr>
    </thead>
    <tbody>
    <?php

    // Can safely ignore $productList not being in scope
    // $productList is grabbed from productSearchHandler when we include this file there
    if (!empty($productList)) {
        for ($i = 0; $i < count($productList); $i++) {
            $currentProductID = $productList[$i]["ID"];

            // Only output active products
            if($productList[$i]["deleted"] != 1) {
                echo "<tr>";

                echo "<td>" . $currentProductID . "</td>";
                echo "<td>" . $productList[$i]["product_name"] . "</td>";
                echo "<td>" . $productList[$i]["product_description"] . "</td>";
                echo "<td>" . $productList[$i]["size"] . "</td>";
                echo "<td>" . $productList[$i]["color"] . "</td>";
                echo "<td>" . $productList[$i]["price"] . "</td>";

                // Edit button
                echo "<td>";
                echo "<form action='../Views/ProductPage/viewProduct.php' method='get'><input type='hidden' name='productID' value='$currentProductID'><input class='button is-primary' type='submit' value='View More...'></form>";
                echo "</td>";

                echo "</tr>" . PHP_EOL;
            }
        }
    }

    ?>
    </tbody>
</table>
