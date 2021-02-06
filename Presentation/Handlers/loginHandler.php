<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU Project
 */
require_once "../../Utility/header.php"; //start session

// Get username and password from our login form
$username = $_POST["username"];
$password = $_POST["password"];

//testing
require_once "../../DataAccess/UserDataAccess.php";

// New UserDataAccess instance (TEMPORARY)
// Should have another layer to abstract away directly acting on the database
$updateDB = new UserDataAccess();

//Get the number of results for the query
$registeredUsers = $updateDB->loginUser($username, $password);


if(count($registeredUsers) == 1) {
    // Check if only 1 record was returned
    // If only 1 record was returned then the user exists and used the correct credentials

    // Set session variables
    $_SESSION["isLoggedIn"] = true;
    $_SESSION["userID"] = $registeredUsers[0]["ID"];
    $_SESSION["username"] = $registeredUsers[0]["username"];
    $_SESSION["firstName"] = $registeredUsers[0]["first_name"];
    $_SESSION["lastName"] = $registeredUsers[0]["last_name"];
    $_SESSION["userRole"] = $registeredUsers[0]["user_role"];

    //echo "Login success";
    include_once "../Views/Login/loginSuccess.html";

} elseif (count($registeredUsers) > 1){
    // This case should never be visited because
    // registration prevents duplicate accounts,
    // but if it happens this will explain why login failed
    $_SESSION["isLoggedIn"] = false;
    echo "Contact an Admin. (ERROR: Duplicate account exists in DB!)<br>";
    echo "<b>Login failed!</b>";

} else {
    // 0 results from DB means user does not exist
    $_SESSION["isLoggedIn"] = false;
    //echo "Login failed!";
    include_once "../Views/Login/loginFailed.html";
}
