<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

// Simulated API for the Product Sales Report

// Autoloader
require_once "../Utility/autoloader.php";

// Generate report
$ordersBS = new OrderBusinessService();
$soldProducts = $ordersBS->allProductSalesReport(date(""), date("Y-m-d")); //just use all dates

// set header for JSON data
header('Content-Type: application/json; charset=UTF-8');


// API TUTORIAL
// https://codeofaninja.com/2017/02/create-simple-rest-api-in-php.html
if(count($soldProducts) > 0) {
    // -----
    // RESULTS FOUND, OUTPUT TO USER

    // set response code - 200 OK
    http_response_code(200);

    $report = json_encode($soldProducts, JSON_PRETTY_PRINT);
    echo $report;
} else {
    // -----
    // NO RESULTS

    // set response code - 404 Not found
    http_response_code(404);

    $noProducts = json_encode(array("message"=>"No Results Found"), JSON_PRETTY_PRINT);
    echo $noProducts;
}
