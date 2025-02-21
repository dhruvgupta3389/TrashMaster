<?php
require_once "../config/db.php"; // Include database connection
session_start();
if (!isset($_SESSION["admin_logged_in"])) {
    header("Location: admin_login.php");
    exit();
}

// Fetch all drivers
$stmt = $pdo->query("SELECT * FROM drivers");
$drivers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Management</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 p-6">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-6 text-gray-100">Driver Management</h2>

        <!-- Assign Route -->
        <div class="bg-gray-700 p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-4 text-white">Assign Route</h3>
            <form action="../api/get_route.php" method="POST" class="space-y-4">
                <label for="driver" class="block font-medium text-gray-700">Select Driver:</label>
                <select name="driver_id" required class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300">
                    <?php foreach ($drivers as $driver) { ?>
                        <option value="<?= $driver['id'] ?>">
                            <?= $driver['name'] ?> (<?= $driver['vehicle_number'] ?>)
                        </option>
                    <?php } ?>
                </select>
                
                <input type="text" name="start_location" placeholder="Start (lng,lat)" required 
                    class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" />
                <textarea name="midpoints" placeholder="Midpoints (one per line)" rows="4"
                    class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300"></textarea>
                <input type="text" name="end_location" placeholder="End (lng,lat)" required 
                    class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" />
                
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">Assign Route</button>
            </form>
        </div>
        
        <!-- Assigned Routes -->
        <div class="mt-8 bg-gray-700 p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-4 text-white">Assigned Routes</h3>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border rounded-lg">
                    <thead>
                        <tr class="bg-gray-500 text-white">
                            <th class="p-3 border">Driver</th>
                            <th class="p-3 border">Start</th>
                            <th class="p-3 border">Midpoints</th>
                            <th class="p-3 border">End</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y text-white">
                        <?php
                        $stmt = $pdo->query("SELECT r.*, d.name FROM routes r JOIN drivers d ON r.driver_id = d.id");
                        $routes = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        
                        foreach ($routes as $route) {
                            echo "<tr class='hover:bg-gray-300'>
                                    <td class='p-3 border'>{$route['name']}</td>
                                    <td class='p-3 border'>{$route['start_lng']}, {$route['start_lat']}</td>
                                    <td class='p-3 border'>{$route['midpoints']}</td>
                                    <td class='p-3 border'>{$route['end_lng']}, {$route['end_lat']}</td>
                                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
