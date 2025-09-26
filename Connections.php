<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    $host = 'localhost';  
    $username = 'hr1_userhr1'; 
    $password = 'hr1password';  
    $dbname = 'hr1_databasehr1';  

    $Connections = mysqli_connect($host, $username, $password, $dbname);


    if (!$Connections) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
