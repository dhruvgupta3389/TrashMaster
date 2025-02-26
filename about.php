<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trash Master</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="nav.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <!-- ***********************************  nav bar starts here  *************************************-->

  <!-- ***********************************  nav bar starts here  *************************************-->

  <nav class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
  
      <!-- for logo -->
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
      <li><a href="index.php">Home</a></li>
      <li><a href="scheduleFinal.php" target="_blank">Schedule a pickup</a></li>
      <li><a href="manage.php" target="_blank">Awareness</a></li>
      <li><a href="about.php" target="_blank">About Us</a></li>
      <li><a href="Community.php" target="_blank">Community</a></li>
    </ul>
  </nav>

  <!-- ***********************************  nav bar ends here  *************************************-->
        <nav aria-label="breadcrumb" style="position: absolute; top: 50px; left: 15px; text-decoration: underline; color: #3ab34a;">
          <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
          </ol>
        </nav>
        </header>
        <section class="text-gray-600 body-font">
          <div class="container px-1 py-24 mx-auto ">
            <div class="flex flex-col text-center w-full mb-0" style="justify-content: center; text-align: center;">
              <h1 class="text-3xl font-medium title-font mb-10 text-gray-900" style="text-decoration: underline;">About Us</h1>
              <h1 class="text-2xl font-medium title-font mb-1 text-gray-900">Who are we?</h1>
              <p class="lg:w-2/3 mx-auto leading-relaxed text-base" >
                A Platform for people and communities to connect with each other and with ongoing programmes and events organised and educate people in the direction of waste management.
              </p>
              <br>
              <h1 class="text-2xl font-medium title-font mb-1 text-gray-900">What we believe in?</h1>
              <p>
                Helping local venders and garbage collectors, by buying the waste material collected by them, on a fair price and sell it to recyclers, small business and NGOs to reuse the waste, it will be a powerful way to promote sustainability & environmental awareness.
              </p>
              <br>
              <h1 class="text-2xl font-medium title-font mb-1 text-gray-900">What we have been up to?</h1>
            <p>
              Contributing to environment, now *WORK WITH US/JOIN US*.</p>
            </div>
        </section>
        
        <hr>

        <?php
        require'conf.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST["name"])) {
            // If it exists, assign its value to $fame
            $name = $_POST["name"];
        } else {
            $name = "DefaultFirstName"; 
        }
        $email =$_POST["email"];
        $message =$_POST["message"];
        
      
      // // Connecting to the Database
      // $servername = "localhost";
      // $username = "root";
      // $password = "";
      // $database = "trashmaster";

      // // Create a connection
      // $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `contact` (`name`, `email`,`message`) VALUES ('$name', '$email', '$message')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
        }
        else{
        }

      }

    }
    ?>

      <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
          </div>
          <form action="about.php" method="post">
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                  <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-full">
                <div class="relative">
                  <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                  <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
              </div>
              <div class="p-2 w-full">
                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
              </div>
              
            </div>
          </div>
          </form>
        </div>
        </section>
        <section class="text-black-600 body-font bg-green-600">
      <div class="container flex flex-wrap px-5 py-24 mx-auto items-center">
        <div class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white-100">Trash Master</h1>
          <p class="leading-relaxed text-base">A new wave of leaders had arrived, and they are *Trash Master*.
            Helping local venders and garbage collectors, by buying the waste material collected by them, on a fair price and sell it to recyclers, small business and NGOs to reuse the waste, it will be a powerful way to promote sustainability & environmental awareness.</p>
        </div>
        <div class="flex flex-col md:w-1/2 md:pl-12">
          <h2 class="title-font font-semibold text-black-800 tracking-wider text-sm mb-3">CATEGORIES</h2>
          <nav class="flex flex-wrap list-none -mb-1">
            <li class="lg:w-1/3 mb-1 w-1/2">
              <a class="text-black-600 hover:text-black-800" href="index.php">Home</a>
            </li>
            <li class="lg:w-1/3 mb-1 w-1/2">
              <a class="text-black-600 hover:text-black-800" href="scheduleFinal.php">Schedule a Pickup</a>
            </li>
            <li class="lg:w-1/3 mb-1 w-1/2">
              <a class="text-black-600 hover:text-black-800" href="manage.php">Awareness</a>
            </li>
            <li class="lg:w-1/3 mb-1 w-1/2">
              <a class="text-black-600 hover:text-black-800" href="about.php">About us</a>
            </li>
            <li class="lg:w-1/3 mb-1 w-1/2">
              <a class="text-black-600 hover:text-black-800" href="Community.php">Community</a>
            </li>
          </nav>
        </div>
      </div>
    </section>
      
</body>
</html>