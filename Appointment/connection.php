<?php

    $database= new mysqli("localhost","root","","Forthall");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
