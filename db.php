<?php
// File: db.php

$host = 'localhost';
$dbname = 'cms';
$username = 'root'; // Sesuaikan dengan user database kamu
$password = ''; // Sesuaikan dengan password database kamu

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Atur mode error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>