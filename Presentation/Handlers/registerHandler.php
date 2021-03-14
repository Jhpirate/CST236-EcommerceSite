<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU Project
 */
//require_once "Autoloader.php";
//require_once "header.php";

//testing
require_once "../../DataAccess/UserDataAccess.php";

// Get form values
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$username = $_POST["username"];
$emailAddress = $_POST["email"];
$password = $_POST["password"];
$dateOfBirth = $_POST["dateOfBirth"];

// New UserDataAccess instance (TEMPORARY)
// Should have another layer to abstract away directly acting on the database
$updateDB = new UserDataAccess();

//count of how man users exist with the same username or email
$isDupe = $updateDB->checkForDuplicateUser($username, $emailAddress);

// Check if user is unique or not
if($isDupe <= 0){
    // Section will only be executed in no other user exists with the same email or username
    // AKA: username and email must not be used by another user
    echo "Registration Successfully Submitted!";
    $updateDB->registerUser($firstName, $lastName, $username, $emailAddress, $password, $dateOfBirth);
} else {
    // User already present in the database, redirect back to register
    echo "Duplicate user found. Redirecting to back to register in 3 seconds....";
    header( "refresh:3;url=register.php");
}
