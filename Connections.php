<?php
    $host = 'localhost';  
    $username = 'root'; 
    $password = 'adsada';  
    $dbname = 'hr1_hr1db';  

    $Connections = mysqli_connect($host, $username, $password, $dbname);


    if (!$Connections) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
