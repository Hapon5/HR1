<?php

$host = 'localhost';  
$username = 'root'; 
$password = '';  
$dbname = 'hr1';  

$Connections = mysqli_connect($host, $username, $password, $dbname);


if (!$Connections) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
