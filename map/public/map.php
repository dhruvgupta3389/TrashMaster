<?php
session_start();
require_once "../config/db.php";

// Ensure only logged-in drivers can view this page
if (!isset($_SESSION["driver_logged_in"]) || $_SESSION["driver_logged_in"] !== true) {
    header("Location: login.php");
    exit();
}

// Fetch routes for the logged-in driver
$stmt = $pdo->prepare("SELECT r.*, d.name FROM routes r JOIN drivers d ON r.driver_id = d.id WHERE r.driver_id = ?");
$stmt->execute([$_SESSION["driver_id"]]);
$routes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Driver Dashboard</title>
  
  <!-- MapLibre GL CSS -->
  <link href="https://unpkg.com/maplibre-gl/dist/maplibre-gl.css" rel="stylesheet" />
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    #map {
      height: 400px;
      width: 100%;
      position: relative;
      margin-bottom: 20px;
    }
    #loadingOverlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255,255,255,0.8);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      z-index: 1000;
    }
    #controls {
      margin-bottom: 10px;
    }
    #directions {
      padding: 10px;
      border: 1px solid #ddd;
      background: #f9f9f9;
      white-space: pre-wrap;
      font-size: 14px;
    }
    button {
      padding: 8px 16px;
      margin-top: 10px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h2>Welcome, <?= htmlspecialchars($_SESSION["driver_name"]); ?>!</h2>
  
  <div id="controls">
      <h3>Your Routes</h3>
      <select id="routeSelector" onchange="loadRoute()">
          <option value="">Select a Route</option>
          <?php foreach ($routes as $route) { ?>
              <option value='<?= json_encode($route) ?>'>
                  <?= htmlspecialchars($route["name"]) ?> (<?= htmlspecialchars($route["start_lng"]) ?>, <?= htmlspecialchars($route["start_lat"]) ?> → <?= htmlspecialchars($route["end_lng"]) ?>, <?= htmlspecialchars($route["end_lat"]) ?>)
              </option>
          <?php } ?>
      </select>
      <p id="distance"></p>
      <button id="doneButton" onclick="markRouteDone()">Mark as Done</button>
  </div>
  
  <div id="map">
      <div id="loadingOverlay" style="display: none;">Loading route...</div>
  </div>
  
  <div id="directions">Select a route to see step-by-step directions.</div>
  
  <script src="https://unpkg.com/maplibre-gl/dist/maplibre-gl.js"></script>
  <script>
    var map = new maplibregl.Map({
      container: 'map',
      style: 'https://tiles.openfreemap.org/styles/liberty',
      center: [77.1025, 28.7041],
      zoom: 10
    });

    map.addControl(new maplibregl.NavigationControl());
    var routeLayer = null;

    function loadRoute() {
      let selectedRoute = document.getElementById("routeSelector").value;
      if (!selectedRoute) return;

      document.getElementById("loadingOverlay").style.display = "flex";

      let route = JSON.parse(selectedRoute);
      let start = [parseFloat(route.start_lng), parseFloat(route.start_lat)];
      let end = [parseFloat(route.end_lng), parseFloat(route.end_lat)];
      let midpoints = JSON.parse(route.midpoints).map(mp => {
          let parts = mp.split(",");
          return [parseFloat(parts[1]), parseFloat(parts[0])];
      });

      document.querySelectorAll('.mapboxgl-marker').forEach(marker => marker.remove());
      if (routeLayer) {
          map.removeLayer("route");
          map.removeSource("route");
      }

      new maplibregl.Marker({ color: "blue" }).setLngLat(start).setPopup(new maplibregl.Popup().setText("Start")).addTo(map);
      midpoints.forEach(point => {
          new maplibregl.Marker({ color: "red" }).setLngLat(point).setPopup(new maplibregl.Popup().setText("Midpoint")).addTo(map);
      });
      new maplibregl.Marker({ color: "green" }).setLngLat(end).setPopup(new maplibregl.Popup().setText("End")).addTo(map);

      let coordsArray = [start, ...midpoints, end].map(coord => coord.join(",")).join(";");

      fetch(`../api/get_route_display.php?coords=${coordsArray}`)
        .then(response => response.text()) // Read response as text for debugging
        .then(text => {
            console.log("OSRM Response:", text); // Debugging log

            let data;
            try {
                data = JSON.parse(text);
            } catch (error) {
                throw new Error("Invalid JSON response");
            }

            if (data.error) {
                throw new Error(data.error);
            }

            document.getElementById("loadingOverlay").style.display = "none";

            map.addSource("route", {
                type: "geojson",
                data: data.route
            });
            map.addLayer({
                id: "route",
                type: "line",
                source: "route",
                layout: { "line-join": "round", "line-cap": "round" },
                paint: { "line-color": "red", "line-width": 5 }
            });

            // 🔹 Auto Zoom Animation to the Route
            let bounds = new maplibregl.LngLatBounds();
            data.route.geometry.coordinates.forEach(coord => bounds.extend(coord));
            map.fitBounds(bounds, { padding: 50, duration: 2000 }); // Smooth animation

            document.getElementById("distance").innerText = `Total Distance: ${data.distance.toFixed(2)} km`;

            // 🔹 Update step-by-step Google Maps-style instructions
            if (data.instructions && data.instructions.length > 0) {
                let formattedInstructions = data.instructions.map(step => {
                    return `➡ ${step}`;
                }).join("\n");
                document.getElementById("directions").innerText = formattedInstructions;
            } else {
                document.getElementById("directions").innerText = "No instructions available.";
            }
        })
        .catch(error => {
            console.error("Error fetching route:", error);
            document.getElementById("loadingOverlay").innerText = "Error loading route";
        });
    }

    function markRouteDone() {
      let selectedRoute = document.getElementById("routeSelector").value;
      if (!selectedRoute) {
          alert("Please select a route to mark as done.");
          return;
      }
      let route = JSON.parse(selectedRoute);
      let routeId = route.id;

      fetch(`../api/mark_route_done.php`, {
          method: "POST",
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: "route_id=" + encodeURIComponent(routeId)
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              alert("Route marked as done.");
              location.reload();
          } else {
              alert("Error marking route as done: " + data.error);
          }
      })
      .catch(error => {
          console.error("Error:", error);
          alert("Error marking route as done.");
      });
    }
  </script>
</body>
</html>
