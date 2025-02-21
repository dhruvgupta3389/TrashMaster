<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="nav.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</head>
<body>

    <!-- ***********************************  nav bar starts here  *************************************-->
    <nav class="nav fixed top-0">
      <input type="checkbox" id="nav-check">
      <div class="nav-header ">
        <div class="nav-title">
          TRASH MASTER
        </div>
      </div>
      <div class="nav-btn">
        <label for="nav-check">
          <span></span>
          <span></span>
          <span></span>
        </label>
      </div>
      
      <ul class="nav-list">
        <a href="index.php">Home</a>
        <a href="scheduleFinal.php" target="_blank">Schedule a pickup</a>
        <a href="manage.php" target="_blank">Awareness</a>
        <a href="about.php" target="_blank">About Us</a>
        <a href="Community.php" target="_blank">Community</a>
      </ul>
    </nav>

  <!-- ***********************************  nav bar ends here  *************************************-->


</body>
</html>