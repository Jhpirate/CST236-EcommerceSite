<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

//require_once "Utility/autoloader.php";
require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/DataAccess/DatabaseConnection.php";
require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/DataAccess/OrderDataAccess.php";
require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/DataAccess/ProductDataAccess.php";
require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/BusinessServices/Model/ShoppingCart.php";
require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/BusinessServices/Model/OrderDetails.php";


class OrderBusinessService
{

    /**
     * Main Checkout function
     * Creates main order and order line items
     * @param $cart
     */
    public function checkout($cart)
    {

        // Create shared data connection
        $database = new DatabaseConnection();
        $connection = $database->getConnected();

        // Disable autocommit for ATOMIC transaction
        $connection->autocommit(false);
        $connection->begin_transaction();

        // Sanity check variable
        // If set to false by any transaction element, do NOT commit changes
        $shouldCommit = true;

        // Order data access & product data access (allow DB access to products and users)
        $orderDataAccess = new OrderDataAccess();
        $productAccess = new ProductDataAccess();

        // ----
        // BEGIN TRANSACTION

        // Create new line in the order table (uses createNewOrder from OrderDataAccess)
        // Should return the id of last inserted element (our orderID)
        $orderID = $orderDataAccess->createNewOrder($cart, $connection);

        // Check that an orderID was returned (-1 indicates error)
        if ($orderID == -1) {
            $shouldCommit = false;
        }

        // Create line items in the order details table
        foreach ($cart->getItems() as $productID => $qty) {
            // Get the current product by its ID from the DB
            $product = $productAccess->findProductByID_obj($productID);

            // Create new order details objects with values from each line item
            $orderDetails = new OrderDetails($orderID, $productID, $qty, $product->getPrice(), $product->getProductDescription());

            // If order creation failed, don't create the line items
            if ($shouldCommit) {
                // Add the line item details using addOrderLineItems method from OrderDataAccess
                $detailsOK = $orderDataAccess->addOrderLineItems($orderID, $orderDetails, $connection);

                // If detailsOk is false or returns -1, error has occurred and execution should be stopped
                if (!$detailsOK || $detailsOK == -1) {
                    $shouldCommit = false;
                    break;
                }
            }
        }


        // Commit the changes if both statements have executed successfully (No flag triggered)
        if ($shouldCommit) {
            echo "Transaction success";
            $connection->commit();
        } else {
            echo "Transaction failed, changes rolled back";
            $connection->rollback();
        }

        $connection->close();
    }


    // TODO: Not implemented (No overall order reports needed yet, just product report)
    // FUNCTION FOR GETTING INFO FOR REPORTS
    public function getOrdersFrom($startDate, $endDate) {
        //$orderDataAccess = new OrderDataAccess();

        //$orderDataAccess->getOrderFromRange($startDate, $endDate);
    }

    // FUNCTION FOR PRODUCT SALES REPORT
    public function allProductSalesReport($start, $end) {
        $orderDataAccess = new OrderDataAccess();

        $sold = $orderDataAccess->allProductSalesReport($start, $end);
        return $sold;
    }

    // Methods not yet implemented or demonstrated
    // No mention of them in any documents, but videos had them so they are here
    public function createNewOrder()
    {

    }

    public function getAllOrders()
    {

    }

    public function deleteItem()
    {

    }

    public function findByID()
    {

    }

    public function updateOne()
    {

    }

    public function getOrderDetails()
    {

    }
}