<?php
session_start();
require_once "../config/db.php";

// Check if admin is already logged in, if so, destroy session
if (isset($_SESSION["admin_logged_in"])) {
    session_destroy();  // Destroy any active admin session
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];  // Entered password

    // Fetch driver from the database by username
    $stmt = $pdo->prepare("SELECT * FROM drivers WHERE username = ?");
    $stmt->execute([$username]);
    $driver = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($driver) {
        // Hash the entered password using SHA-256 and compare it with the stored hash
        $hashed_password = hash("sha256", $password);

        if ($hashed_password === $driver["password"]) {
            // Set session variables if the password matches
            $_SESSION["driver_id"] = $driver["id"];
            $_SESSION["driver_name"] = $driver["name"];
            $_SESSION["driver_logged_in"] = true;
            header("Location: driver_dashboard.php");  // Redirect to driver dashboard
            exit();
        } else {
            $error = "Invalid username or password!";
        }
    } else {
        $error = "Invalid username or password!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Login</title>
    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <section class="bg-teal-50">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div class="w-full rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 bg-green-400 border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Driver Login
              </h1>
              <form class="space-y-4 md:space-y-6" action="#" method="POST">
                  <div>
                      <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                      <input type="text" name="username" id="Username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-600 dark:placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" required="">
                  </div>
                  <button type="submit" class="w-full text-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-green-600 hover:bg-white hover:text-green-500">Login</button>
              </form>
          </div>
      </div>
  </div>
</section>
    <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
</body>
</html>