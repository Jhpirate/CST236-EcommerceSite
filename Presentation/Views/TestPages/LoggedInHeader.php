<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */
include_once "../../../Utility/header.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Success</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <!-- START NAV BAR -->
    <nav class="navbar is-light" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="../../../index.php">
                <img src="../Images/SampleSiteLogo.svg" height="40" width="120">
            </a>
        </div>

        <!-- Nav Bar Links -->
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="../../../index.php">
                    Home
                </a>
                <a class="navbar-item" href="../Search/search.php">
                    Search
                </a>
            </div>

            <!-- Login & Register Buttons -->
            <?php
            if (!isset($_SESSION["userID"])) {

                ?>
                <div class='navbar-end'>
                    <div class='navbar-item'>
                        <div class='buttons'>
                            <a class='button is-primary'>
                                <strong>Sign up</strong>
                            </a>
                            <a class='button is-white'>
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            <?php } else { ?>

                <div class='navbar-end'>
                    <div class='navbar-item'>
                        <p>Hello, <?php echo $_SESSION["firstName"] ?></p>
                    </div>
                </div>

            <?php } ?>

        </div>

    </nav>
    <!-- END NAV BAR -->
</head>
<body>

<?php
echo "IS SESSION SET?: " . $_SESSION["userID"];
?>

</body>
</html>
