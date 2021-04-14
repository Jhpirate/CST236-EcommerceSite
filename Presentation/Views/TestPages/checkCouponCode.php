<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/DataAccess/CouponDataAccess.php";

$couponDA = new CouponDataAccess();
$result = $couponDA->validateCouponCode("50PERCENT");

echo $result;
