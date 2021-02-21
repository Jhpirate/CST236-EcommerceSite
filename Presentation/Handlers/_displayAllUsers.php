<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

// Get the an array of users
//require_once "../../DataAccess/UserDataAccess.php";

$userData = new UserDataAccess();
$usersArray = $userData->getAllUsers();

//display user array in a table
for ($i = 0; $i < count($usersArray); $i++) {

    $userID = $usersArray[$i]["ID"];
    $isActiveUser = $usersArray[$i]["deleted"];

    //user is deleted when is deleted is set to 1
    if($isActiveUser == 0) {
        echo "<tr>";

        echo "<td>" . $userID . "</td>";
        echo "<td>" . $usersArray[$i]["username"] . "</td>";
        echo "<td>" . $usersArray[$i]["email_address"] . "</td>";
        echo "<td>" . $usersArray[$i]["password"] . "</td>";
        echo "<td>" . $usersArray[$i]["first_name"] . "</td>";
        echo "<td>" . $usersArray[$i]["last_name"] . "</td>";
        echo "<td>" . $usersArray[$i]["date_of_birth"] . "</td>";
        echo "<td>" . $usersArray[$i]["user_role"] . "</td>";
        echo "<td>" . $usersArray[$i]["registration_date"] . "</td>";

        // Edit and Delete
        echo <<<EditAndDelete
        <form action="editSingleUser.php" method="get">
            <td><input type="hidden" name="userID" value="$userID"><input type="submit" class="button is-primary" value="Edit"></td>
        </form>
        <form action="../../Handlers/deleteSingleUser.php" method="get">
            <td><input type="hidden" name="userID" value="$userID"><input type="submit" class="button is-danger" value="Delete"></td>
        </form>
EditAndDelete;

        echo "</tr>";
    }

}

?>