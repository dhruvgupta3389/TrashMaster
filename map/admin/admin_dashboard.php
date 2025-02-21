<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once "../config/db.php";

// Check if admin is logged in
if (!isset($_SESSION["admin_logged_in"])) {
    header("Location: admin_login.php");
    exit();
}

// Fetch drivers and routes
$stmt = $pdo->query("SELECT r.*, d.name FROM routes r JOIN drivers d ON r.driver_id = d.id");
$routes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900">

    <!-- Navbar -->
    <nav class="bg-gray-700 p-4 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-white text-xl font-semibold">Admin Dashboard</h1>
            <a href="logout.php" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">
                Logout
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-5xl mx-auto mt-8 bg-white p-6 rounded-lg shadow-lg">
        <h3 class="text-2xl font-semibold mb-4">Assigned Routes</h3>
        
        <div class="overflow-x-auto">
            <table class="w-full border-collapse rounded-lg shadow-sm">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-3 border text-left">Driver</th>
                        <th class="p-3 border text-left">Start</th>
                        <th class="p-3 border text-left">Midpoints</th>
                        <th class="p-3 border text-left">End</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($routes as $route) { ?>
                        <tr class="border-b hover:bg-gray-100 transition">
                            <td class="p-3 border"><?= $route["name"] ?></td>
                            <td class="p-3 border"><?= $route["start_lng"] ?>, <?= $route["start_lat"] ?></td>
                            <td class="p-3 border"><?= nl2br(htmlspecialchars($route["midpoints"])) ?></td>
                            <td class="p-3 border"><?= $route["end_lng"] ?>, <?= $route["end_lat"] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
