<?php
    $host = 'localhost';
    $dbname = 'hr1_databasehr1';
    $username = 'hr1_userhr1';
    $password = 'hr1password';

    try {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        // stop execution on failure
        die("Connection failed.");
    }
?>