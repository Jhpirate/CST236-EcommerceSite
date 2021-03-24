<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */
//require_once "../Utility/autoloader.php";

class OrderDataAccess
{

    public function createNewOrder($cart, $DB_connection) {
        // Database connection is passed in as parameter from OrderBusinessService

        // prepare sql statement
        $sql_statement = $DB_connection->prepare("INSERT INTO cst236_ecommerce_site.orders (date, total_price, users_fk, user_address_fk) values (?, ?, ?, ?)");

        // check if prepare was successful
        if(!$sql_statement){
            echo "Binding messed up";
            return -1;
            exit;
        }


        //set the parameters value
        //$cart = new ShoppingCart();

        $date = date('Y-m-d H:i:s');
        $total_price = $cart->getCartTotal();
        $userID_FK = $cart->getUserID();
        $userAddress_FK = 1; // all default to 0 for now (Address selection is not implemented)


        // bind parameters
        $sql_statement->bind_param("sdii", $date, $total_price, $userID_FK, $userAddress_FK);

        // execute the statement
        $sql_statement->execute();

        //check if it was inserted successfully
        if($sql_statement->affected_rows > 0) {
            //$DB_connection->close();
            return $sql_statement->insert_id; //return the last inserted row ID (this is our order ID)
        } else {
            //$DB_connection->close();
            return false;
        }
    }

    public function addOrderLineItems($orderID, $orderDetails, $DB_connection) {

        //create new lines in the order details table

        //return id of last line item inserted

        $sql_statement = $DB_connection->prepare("INSERT INTO cst236_ecommerce_site.order_detailsX (order_id, product_id, order_qty, current_price, current_description) VALUES (?, ?, ?, ?, ?)");

        if(!$sql_statement) {
            echo "Statement error";
            return -1;
        }

        //$orderDetails = new OrderDetails(); //temporary
        $productID = $orderDetails->getProductID();
        $productQTY = $orderDetails->getOrderQty();
        $productCurrentPrice = $orderDetails->getCurrentItemPrice();
        $productCurrentDesc = $orderDetails->getCurrentItemDesc();

        // bind the parameters
        $sql_statement->bind_param("iiids", $orderID, $productID, $productQTY, $productCurrentPrice, $productCurrentDesc);
        $sql_statement->execute();

        if($sql_statement->affected_rows > 0) {
            //success
            return $DB_connection->insert_id;
        } else {
            return -1;
        }
    }
}