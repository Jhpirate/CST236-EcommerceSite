<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */
require_once "../../../DataAccess/UserDataAccess.php";
require_once "../../../Utility/autoloader.php";

// get the user ID to edit
$userToEdit = $_GET["userID"];

// user data access
$userData = new UserDataAccess();
$usersArray = $userData->getUserByID($userToEdit);

$userID = $usersArray["ID"];
$userUsername = $usersArray["username"];
$userEmailAddress = $usersArray["email_address"];
$userPassword = $usersArray["password"];
$userFirstName = $usersArray["first_name"];
$userLastName = $usersArray["last_name"];
$userDateOfBirth = $usersArray["date_of_birth"];
$userRole = $usersArray["user_role"];
$userRegDate = $usersArray["registration_date"];


//print_r($usersArray); // debug print the array
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>

<section class="section" id="singleUser">
    <div class="container">

        <h1 class="title">
            Currently Editing: <?php echo $userFirstName . ", " . $userLastName . " [$userID]" ?>
        </h1>

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
                </tr>
                </thead>

                <tbody>
                    <?php
                    echo "<tr>";

                    echo "<form action='../../Handlers/updateSingleUser.php' method='get' id='updateUserForm'>";

                    echo "<td><input class='input' type='text' value='$userID' name='userID' readonly></td>";
                    echo "<td><input class='input' type='text' value='$userUsername' name='newUsername'></td>";
                    echo "<td><input class='input' type='email' value='$userEmailAddress' name='newEmailAddress'></td>";
                    echo "<td><input class='input' type='text' value='$userPassword' name='newPassword'></td>";
                    echo "<td><input class='input' type='text' value='$userFirstName' name='newFirstName'></td>";
                    echo "<td><input class='input' type='text' value='$userLastName' name='newLastName'></td>";
                    echo "<td><input class='input' type='text' value='$userDateOfBirth' name='newDOB'></td>";
                    echo "<td><input class='input' type='text' value='$userRole' name='newUserRole'></td>";
                    echo "<td><input class='input' type='text' value='$userRegDate' name='newRegDate' disabled></td>";

                    echo "</form>";
                    echo "</tr>";
                    ?>
                </tbody>
            </table>

            <!-- Update and Cancel buttons-->
            <button class="button is-warning">Cancel</button>
            <button class='button is-primary' type="submit" form="updateUserForm">Update</button>
        </div>
    </div>
</section>

</body>
</html>
