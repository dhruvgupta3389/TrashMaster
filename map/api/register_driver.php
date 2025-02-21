<?php
require_once "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $vehicle_number = $_POST["vehicle_number"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Corrected password hashing
    $hashed_password = hash("sha256", $password);

    $stmt = $pdo->prepare("INSERT INTO drivers (name, phone, vehicle_number, username, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $phone, $vehicle_number, $username, $hashed_password]);

    header("Location: ../public/driver_dashboard.php");
    exit();
}
?>
