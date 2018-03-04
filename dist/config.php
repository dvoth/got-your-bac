<?php

$servername = 'localhost';
$db_username = 'root';
$db_password = 'root';
$db_name = 'got-your-bac';

try{
    $pdo = new PDO("mysql:host=" . $servername . ";dbname=" . $db_name, $db_username, $db_password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}