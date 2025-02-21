<?php
session_start();
require_once "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $vehicle_number = $_POST["vehicle_number"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username already exists
    $stmt = $pdo->prepare("SELECT * FROM drivers WHERE username = ?");
    $stmt->execute([$username]);
    $existing_driver = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existing_driver) {
        $error = "Username already exists!";
    } else {
        // Hash the password
        $hashed_password = hash("sha256", $password);

        // Insert new driver into database
        $stmt = $pdo->prepare("INSERT INTO drivers (name, phone, vehicle_number, username, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $phone, $vehicle_number, $username, $hashed_password]);

        $_SESSION["driver_id"] = $pdo->lastInsertId();
        $_SESSION["driver_name"] = $name;
        $_SESSION["driver_logged_in"] = true;
        header("Location: driver_dashboard.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver SignUp</title>
    <link rel="stylesheet" href="../assets/css/style.css">
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <section class="bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div class="w-full rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Driver SignUp
              </h1>
              <form class="space-y-4 md:space-y-6" action="../api/register_driver.php" method="POST">
                <div>
                      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                      <input type="text" name="name" id="Name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" required="">
                  </div>
                  <div>
                      <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                      <input type="number" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Phone Number" required="">
                  </div>
                  <div>
                      <label for="vehicle_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle Number</label>
                      <input type="text" name="vehicle_number" id="vehicle_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Vehicle Number" required="">
                  </div>
                  <div>
                      <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                      <input type="text" name="username" id="Username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">SignUp</button>
              </form>
          </div>
      </div>
  </div>
</section>
    <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
</body>
</html>
