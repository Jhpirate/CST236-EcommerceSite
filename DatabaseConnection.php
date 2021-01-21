<?php
/*
 * Name: Jared Heeringa
 * Date: 00/00/2021
 * Project: CST236 - Ecommerce Site
 */

/*
 * Main DB connect class
 * call getConnected() to return a mysqli_connection
 * Can then use this to ->query()
 */
class DatabaseConnection
{
    // Private class attributes
    private $host = "localhost";
    private $user = "root";
    private $pass = "root";
    private $db_name = "cst236_ecommerce_site";
    private $db_port = 3306;


    public function getConnected() {
        $mysqli_conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name, $this->db_port);

        // If error, echo error number and exit
        if($mysqli_conn->connect_errno) {
            echo "DB Connect Error!" . $mysqli_conn->connect_errno;
            exit();
        }

        //return db connection
        return $mysqli_conn;
    }
}