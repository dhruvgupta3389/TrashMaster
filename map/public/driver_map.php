<?php
session_start();
require_once "../config/db.php";

if (!isset($_SESSION["driver_id"])) {
    header("Location: login.php");
    exit();
}

$driver_id = $_SESSION["driver_id"];

// Fetch assigned route for the logged-in driver
$stmt = $pdo->prepare("SELECT * FROM routes WHERE driver_id = ?");
$stmt->execute([$driver_id]);
$route = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$route) {
    die("No route assigned to you yet.");
}

// Convert midpoints to a valid JSON array format
$midpoints = json_encode(array_map(function ($mp) {
    return explode(",", $mp);
}, explode(";", $route["midpoints"])));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Route</title>
    <link href="https://unpkg.com/maplibre-gl/dist/maplibre-gl.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { margin: 0; padding: 0; font-family: Arial, sans-serif; }
        #map { position: absolute; top: 50px; bottom: 0; width: 100%; }
    </style>
</head>
<body class="bg-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 text-white shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between">
            <h1 class="text-lg font-semibold">Driver Dashboard</h1>
            <a href="logout.php" class="bg-red-500 px-4 py-2 rounded hover:bg-red-600 transition">Logout</a>
        </div>
    </nav>

    <div class="p-4">
        <h2 class="text-2xl font-semibold mb-10">Your Assigned Route</h2>
        <div id="map" class="pt-8 mt-20"></div>
    </div>

    <script src="https://unpkg.com/maplibre-gl/dist/maplibre-gl.js"></script>
    <script>
        var map = new maplibregl.Map({
            container: 'map',
            style: 'https://tiles.openfreemap.org/styles/liberty',
            center: [<?= $route["start_lng"] ?>, <?= $route["start_lat"] ?>],
            zoom: 12
        });

        var start = [<?= $route["start_lng"] ?>, <?= $route["start_lat"] ?>];
        var end = [<?= $route["end_lng"] ?>, <?= $route["end_lat"] ?>];
        var midpoints = <?= $midpoints ?>.map(mp => mp.map(parseFloat));

        // Add markers
        new maplibregl.Marker({ color: "green" })
            .setLngLat(start)
            .setPopup(new maplibregl.Popup().setText("Start"))
            .addTo(map);

        midpoints.forEach(point => {
            new maplibregl.Marker({ color: "blue" })
                .setLngLat(point)
                .setPopup(new maplibregl.Popup().setText("Midpoint"))
                .addTo(map);
        });

        new maplibregl.Marker({ color: "red" })
            .setLngLat(end)
            .setPopup(new maplibregl.Popup().setText("End"))
            .addTo(map);
    </script>

</body>
</html>
