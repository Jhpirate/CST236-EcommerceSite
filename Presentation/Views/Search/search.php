<!--
  ~ Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <?php include "../../../_navigationBar.php"; ?>
</head>
<body>

<section class="section" id="searchForm">
    <div class="container">
        <h1 class="title">Search for Products</h1>

        <!-- Main Search Bar -->
        <form action="../../Handlers/productSearchHandler.php">
            <div class="field">
                <label class="label" for="searchQuery">Search</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Search Here..." name="searchQuery" id="searchQuery">
                </div>
            </div>

            <!-- Search/Submit button -->
            <input class="button is-primary" type="submit" value="Search">

        </form>
    </div>
</section>


</body>
</html>