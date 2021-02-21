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
                <img src="../Images/SampleSiteLogo.svg" height="40" width="120" alt="No img for you">
            </a>
        </div>

        <!-- Nav Bar Links -->
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="../../../index.php">
                    Home
                </a>
                <a class="navbar-item" href="../Search/search.html">
                    Search
                </a>
            </div>

            <!-- Login & Register Buttons -->
            <?php
            $userID = isset($_SESSION["ID"]) ? $_SESSION["ID"] : null;
            $first_name = isset($_SESSION["firstName"]) ? $_SESSION["firstName"] : null;
            $test = $_SESSION["first_name"];

            if (!isset($_SESSION["userID"])) {
                echo <<<NotRegistered
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
NotRegistered;
                // can NOT have ANYTHING on the line above except it self (HereDoc)
            } else {
                echo <<<LoggedIn
                <div class='navbar-end'>
                    <div class='navbar-item'>
                        <p>Hello, $first_name</p>
                    </div>
                </div>
LoggedIn;
            }
            ?>

        </div>
    </nav>
    <!-- END NAV BAR -->
</head>
<body>

<?php
echo "IS SESSION SET?: " . $_SESSION["userID"];
echo "IS SESSION SET NAME?: " . $_SESSION["firstName"];
echo "ROOT?: " . $_SERVER["DOCUMENT_ROOT"] . "<br>";
echo $_SERVER["PHP_SELF"];
echo "NAME?: " . $_SERVER["SERVER_SOFTWARE"] . "<br>";
?>

</body>
</html>