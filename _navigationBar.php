<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

// _ denotes that this is a partial file. This fill will be included on other pages to add the nav bar
require_once "Utility/header.php";

$isLoggedIn = $_SESSION["isLoggedIn"];
$userID = $_SESSION["userID"];
$username = $_SESSION["username"];
$userRole = $_SESSION["userRole"];

// Override default session values for testing
$userRole = 99;
//$isLoggedIn = false;
?>

<!-- Main navigation bar -->
<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">

        <!-- Desktop expanded -->
        <a class="navbar-item" href="index.php">
            <img src="Presentation/Views/Images/SampleSiteLogo.svg" width="114" height="30" alt="SiteLogo">
        </a>

        <!-- Hamburger menu that only appears on touch devices -->
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <!-- SPAN TAGS USED TO SHOW 3 HORIZONTAL LINES -->
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <!-- Nav bar items -->
    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item">Home</a>

            <a class="navbar-item" href="Presentation/Views/Search/search.html">Search Products</a>

            <?php
            //check if user is admin (role ID of 99)
            if($isLoggedIn == true && $userRole == 99) {
            ?>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Admin</a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="Presentation/Views/EditUsers/editUsers.php">Edit Users</a>
                    <a class="navbar-item" href="Presentation/Views/EditProduct/editProducts.php">Edit Products</a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">Site Info</a>
                </div>
            </div>
            <?php
            } // close if statement body of Admin role check
            ?>
        </div>

        <?php
        // If user is not logged in, show the html with the login and signup buttons (below)
        if($isLoggedIn != true) {
        ?>

        <!-- Login and Sign up options -->
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary" href="Presentation/Views/Register/register.html"><strong>Sign up</strong></a>
                    <a class="button is-light" href="Presentation/Views/Login/login.html">Log in</a>
                </div>
            </div>
        </div>
        <?php
        } // close if statement body from logged in check (display login/register buttons)
        else {

        ?>
            <!-- Hello / Logout -->
            <div class="navbar-end">
                <a class="navbar-item is-light">Welcome, <?php echo $username ?></a>

                <div class="navbar-item buttons">
                    <a class="button is-danger" href="Presentation/Handlers/logout.php"><strong>Logout</strong></a>
                </div>
            </div>

        <?php
        }
        ?>
    </div>
</nav>
