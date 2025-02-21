<?php
session_start();
require_once "../config/db.php";

if (!isset($_SESSION["driver_logged_in"]) || $_SESSION["driver_logged_in"] !== true) {
    echo json_encode(["error" => "Not authorized"]);
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["route_id"])) {
        echo json_encode(["error" => "Route ID missing"]);
        exit();
    }
    $route_id = $_POST["route_id"];
    
    // Update the route status to done (set is_done = 1)
    $stmt = $pdo->prepare("UPDATE routes SET is_done = 1 WHERE id = ? AND driver_id = ?");
    if ($stmt->execute([$route_id, $_SESSION["driver_id"]])) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["error" => "Database update failed"]);
    }
} else {
    echo json_encode(["error" => "Invalid request method"]);
}
?>
