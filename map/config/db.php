<?php
$host = "localhost";
$dbname = "trashmaster";
$username = "root"; // Change this if needed
$password = ""; // Change if using a password
define("API_KEY", "YOUR_SECRET_KEY");   
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>