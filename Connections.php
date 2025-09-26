<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $host = 'localhost';
    $dbname = 'hr1_databasehr1';
    $username = 'hr1_userhr1';
    $password = 'hr1password';

    try {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
        $pdo = new PDO($dsn, $username, $password);

        // Set PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connected successfully!";
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
?>