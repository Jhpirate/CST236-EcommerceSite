<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU Project
 */

$username = $_POST["username"];
$password = $_POST["password"];

//testing
require_once "DataAccess.php";

// New DataAccess instance (TEMPORARY)
// Should have another layer to abstract away directly acting on the database
$updateDB = new DataAccess();


if($updateDB->loginUser($username, $password) == 1) {
    echo "Login success";
} else {
    echo "Login failed!";
}
