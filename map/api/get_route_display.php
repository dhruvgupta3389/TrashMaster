<?php
require_once "../config/db.php";

header("Content-Type: application/json");

if (!isset($_GET["coords"])) {
    echo json_encode(["error" => "No coordinates provided"]);
    exit();
}

$coords = $_GET["coords"];
$osrm_url = "http://router.project-osrm.org/route/v1/driving/{$coords}?overview=full&geometries=geojson&steps=true";

// Fetch OSRM response
$response = @file_get_contents($osrm_url);

if ($response === FALSE) {
    echo json_encode(["error" => "Failed to reach OSRM server"]);
    exit();
}

$data = json_decode($response, true);

// Log OSRM response for debugging
file_put_contents("osrm_debug.log", print_r($data, true));

if (!$data || !isset($data["routes"][0]["geometry"])) {
    echo json_encode(["error" => "Invalid OSRM response", "details" => $data]);
    exit();
}

// Extract route geometry
$optimized_route = $data["routes"][0]["geometry"];
$total_distance = $data["routes"][0]["distance"] / 1000; // Convert meters to km

// 🔹 Convert OSRM steps into summary directions
$instructions = [];
$last_road = null;
$last_distance = 0;

if (!empty($data["routes"][0]["legs"])) {
    foreach ($data["routes"][0]["legs"] as $leg) {
        if (!empty($leg["steps"])) {
            foreach ($leg["steps"] as $step) {
                if (isset($step["maneuver"]["instruction"])) {
                    $distance = round($step["distance"]); // Distance in meters
                    $instruction = ucfirst($step["maneuver"]["instruction"]);
                    $road_name = isset($step["name"]) && $step["name"] !== "" ? $step["name"] : "Unnamed road";

                    // 🔹 Skip duplicate "Continue straight" if it's on the same road
                    if ($instruction === "Continue straight" && $road_name === $last_road) {
                        $last_distance += $distance; // Combine distances for the same road
                        continue;
                    }

                    // 🔹 Add a summary when switching roads
                    if ($last_road && $road_name !== $last_road) {
                        $instructions[] = "➡ Stay on **$last_road** for **$last_distance m**";
                        $last_distance = 0;
                    }

                    // 🔹 Update road tracking
                    $last_road = $road_name;
                    $last_distance += $distance;

                    // 🔹 Add actual turn instructions
                    if ($distance > 20 && $instruction !== "Continue straight") {
                        $instructions[] = "➡ $instruction onto **$road_name** in **$distance m**";
                    }
                }
            }
        }
    }
}

// 🔹 Add final road summary
if ($last_road && $last_distance > 0) {
    $instructions[] = "➡ Continue on **$last_road** for **$last_distance m**";
}

// If no instructions were generated, add a generic summary
if (empty($instructions)) {
    $instructions[] = "➡ Drive for **" . round($total_distance, 1) . " km** following the best available roads.";
}

// Return response
echo json_encode([
    "route" => ["type" => "Feature", "geometry" => $optimized_route],
    "distance" => $total_distance,
    "instructions" => $instructions
]);
?>
