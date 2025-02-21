<?php
require_once "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $driver_id = $_POST["driver_id"];
    $start_location = $_POST["start_location"];
    $midpoints = explode("\n", trim($_POST["midpoints"])); // Convert to array
    $end_location = $_POST["end_location"];

    // Combine all coordinates for OSRM
    $coordinates = array_merge([$start_location], $midpoints, [$end_location]);
    $coordinates_str = implode(";", array_map("trim", $coordinates));

    // Call OSRM API to optimize the route
    $osrm_url = "http://router.project-osrm.org/trip/v1/driving/{$coordinates_str}?source=first&destination=last&roundtrip=false&overview=full&geometries=geojson";
    
    $response = file_get_contents($osrm_url);
    $data = json_decode($response, true);

    if (!$data || !isset($data["trips"][0]["geometry"])) {
        die("Error: Unable to optimize route.");
    }

    // Extract optimized route
    $optimized_route = $data["trips"][0]["geometry"];
    $total_distance = $data["trips"][0]["distance"] / 1000; // Convert meters to km

    // Insert into database
    $stmt = $pdo->prepare("INSERT INTO routes (driver_id, start_lat, start_lng, end_lat, end_lng, midpoints) VALUES (?, ?, ?, ?, ?, ?)");
    list($start_lng, $start_lat) = explode(",", trim($start_location));
    list($end_lng, $end_lat) = explode(",", trim($end_location));
    
    $stmt->execute([$driver_id, $start_lat, $start_lng, $end_lat, $end_lng, json_encode($midpoints)]);

    // Redirect back with success
    header("Location: ../public/index.php?success=1");
    exit();
}
?>
