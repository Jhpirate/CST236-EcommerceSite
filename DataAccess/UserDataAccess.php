<?php
/*
 * Copyright (c) 2021. Jared Heeringa - GCU Project
 */

/*
 * This is the file that actually connects to and access the database
 * Only do data connection and queries in here, no where else
 * Any Insert, Update, Select, or remove is done here with a function that returns something
 */
require_once "DatabaseConnection.php";

class UserDataAccess
{
    // Attributes (none atm)
    // private $variable

    // ###################
    // REGISTRATION MODULE
    // Add new user to MySQL database
    // ###################
    public function registerUser($p_fname, $p_lname, $p_uname, $p_email, $p_pass, $p_dob)
    {

        // New instance of DatabaseConnection
        $dataConnection = new DatabaseConnection();
        $dataLink = $dataConnection->getConnected();

        // SQL statement
        // Prepare and bind parameters
        $sql_statement = $dataLink->prepare("INSERT INTO cst236_ecommerce_site.users (username, email_address, password, first_name, last_name, date_of_birth, user_role, registration_date, deleted) VALUES (?,?,?,?,?,?,?,?,?)");
        $sql_statement->bind_param("ssssssisi", $userName, $email_address, $password, $first_name, $last_name, $date_of_birth, $user_role, $registration_date, $deleted);

        // Set parameters
        $userName = $p_uname;
        $email_address = $p_email;
        $password = $p_pass;
        $first_name = $p_fname;
        $last_name = $p_lname;
        $date_of_birth = $p_dob;
        $user_role = 1; // 1 is default for standard, registered user
        $registration_date = date("Y-m-d");
        $deleted = 0; // 0 means active user

        // Execute the query
        $sql_statement->execute();

        //Close connection
        $sql_statement->close();
        $dataLink->close();
    }

    // ### REGISTRATION MODULE ###
    // Before submitting a new registration, check if the username OR email already exists
    // ###########################
    public function checkForDuplicateUser($p_username, $p_email)
    {

        // New instance of DatabaseConnection
        $dataConnection = new DatabaseConnection();
        $dataLink = $dataConnection->getConnected();

        // SQL statement
        // Prepare and bind
        $sql_statement = $dataLink->prepare("SELECT username, email_address FROM cst236_ecommerce_site.users WHERE username=? OR email_address=?");
        $sql_statement->bind_param("ss", $username, $email_address);

        // Set parameters
        $username = $p_username;
        $email_address = $p_email;

        // Execute & Store results
        $sql_statement->execute();
        $sql_statement->store_result(); // VERY IMPORT TO STORE THE RESULTS, spend too long wondering why it want working
        //$sql_statement->get_result();

        // Store results in an array
        $numOfExistingUsers = $sql_statement->num_rows;

        // Close connection
        $sql_statement->close();
        $dataLink->close();

        // return the number of rows returned from the query
        return $numOfExistingUsers;
    }

    // ###################
    // LOGIN MODULE
    // ###################
    public function loginUser($p_username, $p_password)
    {

        // New instance of DatabaseConnection
        $dataConnection = new DatabaseConnection();
        $dataLink = $dataConnection->getConnected();

        // Prepare out SQL statement and bind parameters to it
        $sql_statement = $dataLink->prepare("SELECT * FROM cst236_ecommerce_site.users WHERE username=? AND password=?");
        $sql_statement->bind_param("ss", $username, $password);

        // Use our bound sql parameters passing in our function parameters
        $username = $p_username;
        $password = $p_password;

        // Execute our query
        $sql_statement->execute();

        // Get the results (returns a resultset object)
        $result = $sql_statement->get_result();

        // Declare holder array
        $userArray = array();

        // Add all results to an array
        while($user = $result->fetch_assoc()){
            array_push($userArray, $user);
        }


        $sql_statement->close();
        $dataLink->close();

        // Return an array of users
        return $userArray;
    }

    // Get all user from the DB
    public function getAllUsers() {
        // New instance of DatabaseConnection
        $dataConnection = new DatabaseConnection();
        $dataLink = $dataConnection->getConnected();

        // SQL Statement
        $sql_statement = $dataLink->prepare("SELECT * from cst236_ecommerce_site.users");

        $sql_statement->execute();

        $results = $sql_statement->get_result();

        $allUsersArray = array();

        // Add all results to an array
        while($user = $results->fetch_assoc()){
            array_push($allUsersArray, $user);
        }

        //close connection
        $sql_statement->close();
        $dataLink->close();

        return $allUsersArray;
    }

    // Get user by their ID
    /* TODO Make function return an object rather than an array
    Should look like $person = new Person(..);
    return $person;
    */
    public function getUserByID($p_userID) {
        // New instance of DatabaseConnection
        $dataConnection = new DatabaseConnection();
        $dataLink = $dataConnection->getConnected();

        //Prepare and bind
        $sql_statement = $dataLink->prepare("SELECT * from cst236_ecommerce_site.users where ID = ?");
        $sql_statement->bind_param("i", $userID);

        $userID = $p_userID;
        $sql_statement->execute();

        $results = $sql_statement->get_result();

        //close connection
        $sql_statement->close();
        $dataLink->close();

        return $results->fetch_assoc();
    }

    //Delete user by their ID
    // really just updating the DB isDeleted field to 1
    public function deleteUserByID($p_ID) {
        $dataConnection = new DatabaseConnection();
        $dataLink = $dataConnection->getConnected();

        //prepare
        $sql_statement = $dataLink->prepare("UPDATE cst236_ecommerce_site.users SET deleted=1 WHERE ID=?");
        $sql_statement->bind_param("i", $ID);

        $ID = $p_ID;
        $sql_statement->execute();

        //close connection
        $sql_statement->close();
        $dataLink->close();
    }


    //Update the user with new information
    public function updateUserByID($p_newUsername, $p_newEmail, $p_newPassword, $p_newFirstName, $p_newLastName, $p_newDOB, $p_ID) {
        $dataConnection = new DatabaseConnection();
        $dataLink = $dataConnection->getConnected();

        //prepare
        $sql_statement = $dataLink->prepare("UPDATE cst236_ecommerce_site.users SET username=?, email_address=?, password=?, first_name=?, last_name=?, date_of_birth=? WHERE ID=?");
        $sql_statement->bind_param("ssssssi", $username, $email_address, $password, $first_name, $last_name, $date_of_birth, $ID);

        $username = $p_newUsername;
        $email_address = $p_newEmail;
        $password = $p_newPassword;
        $first_name = $p_newFirstName;
        $last_name = $p_newLastName;
        $date_of_birth = $p_newDOB;
        $ID = $p_ID;

        $sql_statement->execute();

        //close connection
        $sql_statement->close();
        $dataLink->close();
    }
}