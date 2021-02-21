<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

require_once "../../DataAccess/UserDataAccess.php";

$ID = $_GET["userID"];
$newUsername = $_GET["newUsername"];
$newEmailAddress = $_GET["newEmailAddress"];
$newPassword = $_GET["newPassword"];
$newFirstName = $_GET["newFirstName"];
$newLastName = $_GET["newLastName"];
$newDOB = $_GET["newDOB"];
$newUserRole = $_GET["newUserRole"];
//$newRegDate = $_GET["newRegDate"];

//echo "ID: " . $ID;
//echo "New Username: " . $newUsername;

$userDataAccess = new UserDataAccess();
$userDataAccess->updateUserByID($newUsername, $newEmailAddress, $newPassword, $newFirstName, $newLastName, $newDOB, $ID);

header("Location: ../Views/EditUsers/editUsers.php");