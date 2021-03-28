<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

//TODO: REMOVE THIS ONCE AUTOLOADER IS DONE BEING A POS
require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/BusinessServices/Model/ShoppingCart.php";
require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/DataAccess/ProductDataAccess.php";
require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/DataAccess/UserDataAccess.php";


// Load autoloader and header
require_once "../../../Utility/autoloader.php";
require_once "../../../Utility/header.php";



// Allow access to users and products from DB
$productAccess = new ProductDataAccess();
$userDataAccess = new UserDataAccess();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <!-- Navigation Bar Include -->
    <?php include "../../../_navigationBar.php"; ?>

</head>
<body>

<section class="section">
    <div class="container">
        <div class="columns">

            <!-- show payment entry form -->
            <div class="column">

                <h3 class="title">Payment Details</h3>

                <form method="post" id="creditCardInfo" action="../../Handlers/processCheckout.php">

                    <!-- FULL NAME -->
                    <div class="field">
                        <label class="label" for="fullName">Name</label>
                        <input class="input" type="text" name="fullName" placeholder="Jane Doe" id="fullName" required>
                    </div>

                    <!-- EMAIL ADDRESS -->
                    <div class="field">
                        <label class="label" for="email">Email Address</label>
                        <input class="input" type="email" name="email" placeholder="Email Address" id="email" required>
                    </div>

                    <!-- ADDRESS 1 -->
                    <div class="field">
                        <label class="label" for="address1">Address</label>
                        <input class="input" type="text" name="address1" placeholder="123 Main St." id="address1"
                               required>
                    </div>

                    <!-- ADDRESS 2 -->
                    <div class="field">
                        <label class="label" for="address2">Address 2 (Optional)</label>
                        <input class="input" type="text" name="address2" id="address2">
                    </div>

                    <!-- STATE AND ZIP CODE COLUMNS -->
                    <div class="columns">

                        <!-- STATE COLUMN -->
                        <div class="column is-one-quarter">

                            <label class="label" for="state">State</label>

                            <div class="control">
                                <div class="select">
                                    <select name="state" id="state" required>
                                        <option value="AL">AL</option>
                                        <option value="AK">AK</option>
                                        <option value="AR">AR</option>
                                        <option value="AZ">AZ</option>
                                        <option value="CA">CA</option>
                                        <option value="CO">CO</option>
                                        <option value="CT">CT</option>
                                        <option value="DC">DC</option>
                                        <option value="DE">DE</option>
                                        <option value="FL">FL</option>
                                        <option value="GA">GA</option>
                                        <option value="HI">HI</option>
                                        <option value="IA">IA</option>
                                        <option value="ID">ID</option>
                                        <option value="IL">IL</option>
                                        <option value="IN">IN</option>
                                        <option value="KS">KS</option>
                                        <option value="KY">KY</option>
                                        <option value="LA">LA</option>
                                        <option value="MA">MA</option>
                                        <option value="MD">MD</option>
                                        <option value="ME">ME</option>
                                        <option value="MI">MI</option>
                                        <option value="MN">MN</option>
                                        <option value="MO">MO</option>
                                        <option value="MS">MS</option>
                                        <option value="MT">MT</option>
                                        <option value="NC">NC</option>
                                        <option value="NE">NE</option>
                                        <option value="NH">NH</option>
                                        <option value="NJ">NJ</option>
                                        <option value="NM">NM</option>
                                        <option value="NV">NV</option>
                                        <option value="NY">NY</option>
                                        <option value="ND">ND</option>
                                        <option value="OH">OH</option>
                                        <option value="OK">OK</option>
                                        <option value="OR">OR</option>
                                        <option value="PA">PA</option>
                                        <option value="RI">RI</option>
                                        <option value="SC">SC</option>
                                        <option value="SD">SD</option>
                                        <option value="TN">TN</option>
                                        <option value="TX">TX</option>
                                        <option value="UT">UT</option>
                                        <option value="VT">VT</option>
                                        <option value="VA">VA</option>
                                        <option value="WA">WA</option>
                                        <option value="WI">WI</option>
                                        <option value="WV">WV</option>
                                        <option value="WY">WY</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- ZIP CODE COLUMN -->
                        <div class="column is-three-quarters">
                            <div class="field">
                                <label class="label" for="zipCode">Zip Code</label>
                                <input class="input" type="text" name="zipCode" placeholder="01234" id="zipCode"
                                       required>
                            </div>
                        </div>
                    </div>


                    <!-- Credit Card Number -->
                    <div class="field">
                        <label class="label" for="creditCardNum">Card Number</label>
                        <input class="input" type="text" name="creditCardNum" id="creditCardNum"
                               placeholder="1234 5678 9000 1234">
                    </div>

                    <!-- CVV -->
                    <div class="field">
                        <label class="label" for="creditCardCVV">CVV</label>
                        <input class="input" type="text" name="creditCardCVV" id="creditCardCVV" placeholder="123">
                    </div>

                    <!-- EXP MONTH & EXP YEAR COLUMNS-->
                    <div class="columns">

                        <!-- MONTH COLUMN-->
                        <div class="column">
                            <div class="field">

                                <label class="label" for="creditCardExpMonth">Expiration Month</label>

                                <div class="select">
                                    <select name="creditCardExpMonth" id="creditCardExpMonth">
                                        <option value='1'>January</option>
                                        <option value='2'>February</option>
                                        <option value='3'>March</option>
                                        <option value='4'>April</option>
                                        <option value='5'>May</option>
                                        <option value='6'>June</option>
                                        <option value='7'>July</option>
                                        <option value='8'>August</option>
                                        <option value='9'>September</option>
                                        <option value='10'>October</option>
                                        <option value='11'>November</option>
                                        <option value='12'>December</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- EXPIRATION YEAR -->
                        <div class="column">
                            <div class="field">

                                <label class="label" for="creditCardExpYear">Expiration Year</label>

                                <div class="select">
                                    <select name="creditCardExpYear" id="creditCardExpYear">
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

            <!-- Show product details table left -->
            <div class="column">

                <h3 class="title">Items</h3>

                <table class="table is-striped is-hoverable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>QTY</th>
                        <th>Price</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    // Output cart contents below

                    // Get user cart session variable
                    $cart = $_SESSION["userCartStorage"];

                    // start items counter at 1
                    $cartCount = 1;

                    // loop through cart items and display them here as well (no edit options)
                    foreach ($cart->getItems() as $productID => $qty) {

                        // only display items if the cart is set
                        if(isset($_SESSION["userCartStorage"])) {
                            // Get product from DB based on ID
                            $product = $productAccess->findProductByID_obj($productID);

                            // Output table row for each product
                            echo "<tr>";

                            echo "<td>" . $cartCount . "</td>";
                            echo "<td>PHOTO_HERE</td>";
                            echo "<td>" . $product->getProductName() . "</td>";
                            echo "<td>" . $qty . "</td>";
                            echo "<td>$" . number_format($product->getPrice(), 2) . "</td>";

                            echo "</tr>";

                            $cartCount++;
                        }
                    }

                    ?>
                    </tbody>

                    <tfoot>
                    <tr>
                        <td colspan="5" class="has-text-right">
                            <strong>TOTAL:</strong> $<?php $cart->calculateCartTotals();
                            echo number_format($cart->getCartTotal(), 2); ?>
                        </td>
                    </tr>
                    </tfoot>
                </table>

                <!-- show the checkout and cancel buttons -->
                <div class="buttons is-justify-content-space-evenly">

                    <form method="post" action="showCart.php">
                        <input class="button is-danger is-large" type="submit" value="Cancel">
                    </form>

                    <button class="button is-primary is-large" type="submit" form="creditCardInfo">Checkout</button>

                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>