<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

require_once "../../../DataAccess/UserDataAccess.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View All Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

    <?php include "../../../_navigationBar.php"; ?>

</head>
<body>

<section class="section" id="usersHeader">
    <div class="container">
        <h1 class="title">Edit Users</h1>

        <div class="table-container">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email Address</th>
                    <th>Password</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>DOB</th>
                    <th>User Role</th>
                    <th>Registration Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>

                <tbody>
                <?php
                include_once "../../Handlers/_displayAllUsers.php" ?>
                </tbody>

            </table>
        </div>
    </div>
</section>

</body>
</html>
