<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

/*
 * This file access any thing from the database dealing with products
 */
require_once "DatabaseConnection.php";

class ProductDataAccess
{

    // Get product by ID
    public function findProductByID($p_productID) {
        // New instance of DatabaseConnection
        $dataConnection = new DatabaseConnection();
        $dataLink = $dataConnection->getConnected();

        // SQL statement (prepare and bind)
        $sql = $dataLink->prepare("SELECT * FROM cst236_ecommerce_site.products WHERE ID = ?");
        $sql->bind_param("i", $ID);

        $ID = $p_productID; // Use our parameter as our value to find in our query

        // Execute the query and store the results
        $sql->execute();
        $result = $sql->get_result();

        // Initialize the products array
        $products_array = array();

        while($product = $result->fetch_assoc()) {
            array_push($products_array, $product);
        }

        // Close data connection
        $sql->close();
        $dataLink->close();

        return $products_array;
    }

    // ---------------
    // Search all fields for a match
    // ---------------
    public function findProduct($p_search) {
        // New instance of DatabaseConnection
        $dataConnection = new DatabaseConnection();
        $dataLink = $dataConnection->getConnected();

        // SQL statement (prepare and bind)
        $statement = "SELECT * FROM cst236_ecommerce_site.products WHERE product_name LIKE ? OR product_description LIKE ? OR size LIKE ? OR color LIKE ?;";
        $sql = $dataLink->prepare($statement);
        $sql->bind_param("ssss", $pName, $pDesc, $pSize, $pColor);

        $relativeSearch = "%" . $p_search . "%";
        $pName =  $relativeSearch; // Use our parameter as our value to find in our query
        $pDesc = $relativeSearch;
        $pColor = $relativeSearch;
        $pSize = $relativeSearch;

        // Execute the query and store the results
        $sql->execute();
        $result = $sql->get_result();

        // Initialize the products array
        $products_array = array();

        while($product = $result->fetch_assoc()) {
            array_push($products_array, $product);
        }

        // Close data connection
        $sql->close();
        $dataLink->close();

        return $products_array;
    }
}