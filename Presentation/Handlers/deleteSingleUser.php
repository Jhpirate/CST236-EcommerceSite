<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU CST236 Ecommerce Project
 */

require_once "../../DataAccess/UserDataAccess.php";
$IDtoDelete = $_GET["userID"];

$userDataAccess = new UserDataAccess();
$userDataAccess->deleteUserByID($IDtoDelete);

header("Location: ../Views/EditUsers/editUsers.php");