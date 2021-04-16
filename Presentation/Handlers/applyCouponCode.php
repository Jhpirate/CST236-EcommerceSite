<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

//AUTOLOADER STOPPED AGAIN...
require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/BusinessServices/Model/ShoppingCart.php";
require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/DataAccess/CouponDataAccess.php";

require_once "../../Utility/autoloader.php";
require_once "../../Utility/header.php";


//get the cart session variable
$userCart = new ShoppingCart(null);
$userCart = $_SESSION["userCartStorage"];

// get the coupon code
$userCoupon = $_POST["discountCode"];

// validate coupon code
$couponAccess = new CouponDataAccess();
$couponCode = $couponAccess->validateCouponCode($userCoupon);

//$userCart = new ShoppingCart(null); //temp for method purposes

// if coupon code is deemed to be valid move on to see what kind of coupon code to apply
if($couponCode != -1) {

    //set session variable that coupon has been used
    $_SESSION["userCoupon"] = $userCoupon . "(" . $couponCode . ")";


    //default new total to existing total
    $newTotal = $userCart->getCartTotal();

    //apply discount percentage
    if($couponCode < 1 && $couponCode > 0) {
        $newTotal = $userCart->getCartTotal() - ($userCart->getCartTotal() * $couponCode);
    }
    //apply dollar discount
    else if($couponCode > 1) {
        $newTotal = $userCart->getCartTotal() - $couponCode;
    }

    $userCart->setCartTotal($newTotal);


    //$newTotal = $userCart->getCartTotal();
}


// if valid do calculation on cart total
// if not valid return same cart
?>

<script>
    setTimeout(function () {
        window.location.href = '../Views/ViewCart/checkout.php';
    }, 1000);
</script>

