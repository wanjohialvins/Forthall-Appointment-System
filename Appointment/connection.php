<?php
/**
 * DATABASE CONNECTION CONFIGURATION
 * Project: Forthall Patient Access and Scheduling System
 * Developer: eragondevs
 */

    // Establish connection to MySQL database
    $database= new mysqli("localhost","root","","Forthall");

    // Check for connection errors
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
