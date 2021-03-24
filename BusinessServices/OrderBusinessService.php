<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */
//require_once "Utility/autoloader.php";

class OrderBusinessService
{

    //old: public function checkout($order, $cart) {
    public function checkout($cart) {
        // create shared data connection
        $database = new DatabaseConnection();
        $connection = $database->getConnected();

        //disable autocommit
        $connection->autocommit(false);
        $connection->begin_transaction();

        // variable for if anything goes wrong with adding line items
        $shouldCommit = true;

        // Order data access & product data access
        $orderDataAccess = new OrderDataAccess();
        $productAccess = new ProductDataAccess();

        // BEGIN TRANSACTION

        // create new line in the order table (createNewOrder from OrderDataAccess)
        $orderID = $orderDataAccess->createNewOrder($cart, $connection);

        // check that we actually received a order id
        if($orderID == -1) {
            $shouldCommit = false;
        }

        //create multiple lines in the order details table
        foreach ($cart->getItems() as $productID => $qty) {
            //product access
            $product = $productAccess->findProductByID_obj($productID);

            //create new order details objects with item values
            $orderDetails = new OrderDetails($orderID, $productID, $qty, $product->getPrice(), $product->getProductDescription());

            // add the line item details
            if($shouldCommit) {
                $detailsOK = $orderDataAccess->addOrderLineItems($orderID, $orderDetails, $connection);

                if(!$detailsOK || $detailsOK == -1) {
                    $shouldCommit = false;
                }

            }
        }


        //commit the changes if success
        if($shouldCommit) {
            echo "Transaction success";
            $connection->commit();
        } else {
            echo "Transaction failed, changes rolled back";
            $connection->rollback();
        }

        $connection->close();
    }


    public function createNewOrder() {

    }

    public function getAllOrders() {

    }

    public function deleteItem() {

    }

    public function findByID() {

    }

    public function updateOne() {

    }

    public function getOrderDetails() {

    }
}