<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

require_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/BusinessServices/OrderBusinessService.php";

// get form data
$startDate = $_GET["startDate"];
$endDate = $_GET["endDate"];

// Generate report
$ordersBS = new OrderBusinessService();
$soldProducts = $ordersBS->allProductSalesReport($startDate, $endDate);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <!-- DataTables JQuery -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bulma.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/dataTables.bulma.min.js"></script>

    <!-- Include nav bar partial page -->
    <?php include_once "/Applications/MAMP/htdocs/CST236-EcommerceSite/_navigationBar.php" ?>

</head>
<body>
<section class="section">
    <div class="container">

        <div class="title">
            <h1 class="title">Product Sales Report</h1>
        </div>

        <div class="table-container">
        <table class="table is-fullwidth" id="soldProducts">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Total Units Sold</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $totalProductsSold = 0;

            if(count($soldProducts) > 0) {
                foreach ($soldProducts as $product) {
                    $totalProductsSold += $product["productSum"];

                    echo "<tr>";

                    echo "<td>" . $product["product_id"] . "</td>";
                    echo "<td>" . $product["product_name"] . "</td>";
                    echo "<td>" . $product["productSum"] . "</td>";

                    echo "</tr>";
                }
            } else {
                echo "<tr>";
                echo "<td colspan='3'>No Results</td>";
                echo "</tr>";
            }

            ?>
            </tbody>
            <tfoot>
            <tr>
                <td class="has-text-right" colspan="3"><?php echo $totalProductsSold ?></td>
            </tr>
            </tfoot>
        </table>
        </div>
    </div>
</section>

</body>

<!-- Datatables Stuff (Dont really know JavaScript, but it works so there that) -->
<script>
    $(document).ready( function () {
        $('#soldProducts').DataTable();
    } );
</script>

</html>
