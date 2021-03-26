<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */
//require_once "../../../DataAccess/ProductDataAccess.php"; //temp
require_once "../../../Utility/autoloader.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <!-- DataTables JQuery -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bulma.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/dataTables.bulma.min.js"></script>

    <?php include "../../../_navigationBar.php"; ?>

</head>
<body>

<section class="section">
    <div class="container">

        <h1 class="title">Edit Products</h1>

        <div class="table-container">
            <table class="table" id="allProducts">

                <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>

                <tbody>
                <!-- Include our created table with all the different products -->
                <?php
                    include_once "../../Handlers/_displayAllProducts.php"
                ?>
                </tbody>

            </table>
        </div>
    </div>
</section>

</body>

<!-- Datatables Stuff (Dont really know JavaScript, but it works so there that) -->
<script>
    $(document).ready( function () {
        $('#allProducts').DataTable();
    });
</script>

</html>
