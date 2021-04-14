<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

// Make sure autoloader is loaded first, then header to start the session
require_once "../../../Utility/autoloader.php";
//require_once "../../../DataAccess/ProductDataAccess.php"; // autoloader just broke... why? NOTHING CHANGED - Session somehow corrupted
//require_once "../../../DataAccess/UserDataAccess.php";
require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/BusinessServices/Model/ShoppingCart.php";
require_once "../../../Utility/header.php";
require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/DataAccess/ProductDataAccess.php";
require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/DataAccess/UserDataAccess.php";

// Allow access to users and products
$productAccess = new ProductDataAccess();
$userDataAccess = new UserDataAccess();

// Check if a cart is set in the session variable
if (isset($_SESSION["userCartStorage"])) {
    $cart = $_SESSION["userCartStorage"];
} else {
    echo "Cart is empty...";
    exit;
}

// Grab information about logged in user
if (isset($_SESSION["userID"])) {
    $userID = $_SESSION["userID"];
} else {
    echo "Not logged in, no cart";
    exit;
}

// Check if current cart belongs to logged in user and there isn't a session mix up
// Will likely never be executed
if ($cart->getUserID() != $_SESSION["userID"]) {
    echo "Cart user mismatch. Please sign out and log in again!";
    exit;
}

//unset coupon code
unset($_SESSION["userCoupon"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <?php include "../../../_navigationBar.php"; ?>

</head>
<body>

<section class="section">
    <div class="container">

        <div class="title">
            <h1 class="title">Your Cart</h1>
        </div>

        <?php
        //TODO: Bulma mobile doesn't play nice with tables, replace with something else
        ?>
        <div class="table-container">
            <table class="table is-fullwidth">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Picture</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th>Item Qty</th>
                    <th colspan="2">Actions</th>
                </tr>
                </thead>

                <tbody>

                <?php
                // Cart items counter
                $cartCount = 1;

                //Loop through each item in the cart and display it
                foreach ($cart->getItems() as $productID => $qty) {
                    // Get and store current product as an object instance
                    $product = $productAccess->findProductByID_obj($productID);

                    echo "<tr>";

                    echo "<td>" . $cartCount . "</td>";
                    echo "<td>PHOTO_HERE</td>";
                    echo "<td>" . $product->getProductName() . "</td>";
                    echo "<td>$" . number_format($product->getPrice(), 2) . "</td>";
                    echo <<<UPDATE_QTY
<td>
    <form action="../../Handlers/updateCartQty.php" method="get">
        <input type="hidden" name="productID" value="$productID">
        <div class="field has-addons">
        <div class="control">
        <input type="number" class="input" name='updatedQTY' value="$qty"></div>
        <div class="control"><input type='submit' class="button is-primary" value="Update"></div>
</div>
       
    </form>
</td>
UPDATE_QTY;

                    echo "<td><form action='../../Handlers/removeItemFromCart.php'><input type='hidden' name='productID' value='" . $productID . "'><input type='submit' class='button is-danger' value='Remove'></form></td>";

                    echo "</tr>";

                    //increment our cart items counter
                    ++$cartCount;
                }

                ?>

                </tbody>

                <tfoot>
                <tr>
                    <td colspan="7" class="has-text-right"><strong>TOTAL:</strong> $<?php $cart->calculateCartTotals();
                        echo number_format($cart->getCartTotal(), 2); ?></td>
                </tr>
                </tfoot>
            </table>
        </div>

        <!-- Checkout Button -->
        <div class="buttons is-right">
            <form method="post" action="checkout.php">
                <input type="submit" class="button is-info" value="Checkout">
            </form>
        </div>
    </div>
</section>

</body>
</html>
