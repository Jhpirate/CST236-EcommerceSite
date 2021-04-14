<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/DataAccess/DatabaseConnection.php";

class CouponDataAccess
{

    public function validateCouponCode($p_code)
    {
        // set up database access
        $database = new DatabaseConnection();
        $connection = $database->getConnected();

        //setup sql statement
        $sql_statement = $connection->prepare("SELECT * FROM cst236_ecommerce_site.coupon_codes WHERE coupon_code = ?");

        //bind parameters
        $sql_statement->bind_param("s", $couponCode);

        // set parameters
        $couponCode = $p_code;

        //execute & get results
        $sql_statement->execute();
        $results = $sql_statement->get_result();

        if ($results->num_rows == 0) {
            // no coupon with parameter value found
            return -1;
        } else if ($results->num_rows == 1) {
            // 1 valid coupon code found
            $coupon = $results->fetch_array();

            // return either the discount percentage or dollar discount
            if (!is_null($coupon["discount"])) {
                //return discount dollars because percentage is null
                return $coupon["discount"];
            } else if (!is_null($coupon["discount_percentage"])) {
                //return discount percent because dollar is null
                return $coupon["discount_percentage"];
            } else {
                // something went wrong
                return -1;
            }
        } else {
            return -1;
        }
    }

}