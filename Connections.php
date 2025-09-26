<?php
    $host = '127.0.0.1';  
    $username = 'hr1_hr1db'; 
    $password = 'hr1_hr1db';  
    $dbname = 'hr1_hr1db';  

    $Connections = mysqli_connect($host, $username, $password, $dbname);


    if (!$Connections) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
