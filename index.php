<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trash Master</title>

    <link rel="stylesheet" type="text/css" href="styles.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="nav.css">
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
    />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> -->
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
      <a href="./map/admin/admin_login.php" target="_blank">admin</a>
      <a href="./map/public/login.php" target="_blank">driver</a>
    </ul>
  </nav>

  <!-- ***********************************  nav bar ends here  *************************************-->
    <!-- ------------------------------------------Body Starts --------------------------------------------------- -->
    <div class="container">
    <div class="row">
      <div class="col-lg-22 col-sm-12 local_home_leftSide mt-5 pt-5">
        <h1 class="local_home_title">
          TURN YOUR TRASH
          <br>
          INTO CASH ONLINE WITH
          <span class="highlight">Trash Master!</span>
        </h1>
        <div class="local_home_sub_title">
          <br>
          <p>Trash Master is a platform for people and communities to connect with each other and with ongoing programmes and events organised and educate people in the direction of waste management.
          </p>
        </div>
        
        </div>
        <div class="col-lg-6 login-mobile-box " id="schedulePickup">
          <div id="schedulePickup" class="local_home_rightSide" style="height: 75vh;">
            <div class="login_form_open">
              <div class="local_login_form">
                <div>
                  <form>
                    <h4 class="local_login_title">Worried about what to do with daily waste?</h4> <br>
                    <h3 class="local_login_title">Sell your recyclables to us and make a positive impact on the environment while earning money.</h3>
                    <div class="button my-9 flex justify-start items-center gap-[3rem]">
                        <button
                          class="bg-green-600 rounded-2xl text-white hover:bg-blue-600 py-4 px-4 transition-all active:bg-blue-700 focus:outline-blue-700"
                        ><a href="scheduleFinal.php">Schedule a Pick-Up Now!</a>
                        </button>
                    </div>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ------------------------------------------Body Ends --------------------------------------------------- -->
    <!-- ------------------------------------------How it Works Starts --------------------------------------------------- -->
    <div class="bg-slate-200" id="books">
      <h1
        class="text-6xl px-10 justify-center flex justify-items-center font-extrabold py-12 text-black transition-shadow text-center delay-100"
        data-aos="zoom-out-down "
        data-aos-duration="3000"
      >
      How it works
      </h1>
    <section class="min-h-[50vh] py-[5px] flex justify-evenly flex-wrap gap-[2rem]">
        <div
          class="w-[350px] h-[250px] p-10 rounded-3xl shadow-xl  border-spacing-6 block cursor-pointer"
          data-aos="fade-rightscheduleFinal.php         data-aos-delay="500"
        >
        <a class="block relative h-[200px] rounded overflow-hidden grid place-items-center">Schedule a pickup
          <img
            alt="ecommerce"
            class=""
            src="img/Schedule.jpg"
          />
        </a>
        </div>
        <div
          class="w-[350px] h-[250px] p-10 rounded-3xl shadow-xl  border-spacing-6 block cursor-pointer "
          div data-aos="fade-right"
          data-aos-duration="1500"
        > 
          <a class="block relative h-[200px] rounded overflow-hidden grid place-items-center">Pickup at your address
            <img
              alt="ecommerce"
              class="w-full h-full"
              src="img/Pickup.jpg"
            />
          </a>
        </div>
        <div
          class="w-[350px] h-[250px] p-10 rounded-3xl shadow-xl border-spacing-6 block cursor-pointer"
          data-aos="fade-right"
          data-aos-duration="1500"
        >
          <a class="block relative h-[200px] rounded overflow-hidden grid place-items-center">Receive payment or gain points
            <img
              alt="ecommerce"
              class="w-full h-full"
              src="img/Payment.jpg"
              
            />
          </a>
        </div>
      </section>
    </div>
      <!-- ------------------------------------------How it Works Ends --------------------------------------------------- -->
      <!-- ------------------------------------------Why Us Starts --------------------------------------------------- -->
      <div class="cont">
        <h1
          class="text-6xl px-10 justify-center flex justify-items-center font-extrabold py-12 text-white transition-shadow text-center delay-100"
          data-aos="zoom-out-down "
          data-aos-duration="3000"
        >
        Why Us?
        </h1>
      <section class="min-h-[30vh] py-[5px] flex justify-evenly flex-wrap gap-[2rem]">
          <div
            class="w-[300px] h-[200px] p-10 rounded-3xl shadow-xl  border-spacing-6 bg-teal-50 cursor-pointer"
            data-aos="fade-right"
            data-aos-duration="1500"
            data-aos-delay="500"
          >
          <a class="relative h-[100px] rounded overflow-hidden"> <strong>Zero waste & Eco Friendly</strong>
            <br>
            We take your waste to recyclers, small business and NGOs to reuse the waste, to promote sustainability & environmental awareness.
          </a>
          </div>
          <div
            class="w-[300px] h-[200px] p-10 rounded-3xl shadow-xl  border-spacing-6 bg-teal-50 cursor-pointer"
            data-aos="fade-right"
            data-aos-duration="1500"
            data-aos-delay="500"
          >
          <a class="relative h-[100px] rounded overflow-hidden"> <strong>Convenience</strong>
            <br>
            Doorstep pickup according to user's convenient date & time. Just do segregartion, and leave everything elso on us.
          </a>
          </div>
          <div
            class="w-[300px] h-[200px] p-10 rounded-3xl shadow-xl  border-spacing-6 bg-teal-50 cursor-pointer "
            div data-aos="fade-right"
            data-aos-duration="1500"
          > 
            <a class="relative h-[100px] rounded overflow-hidden"> <strong>Best rate</strong>
              <br>
              Dont't sure whether making a profittable deal or not? Try yourself by comparing our prices with the local vendors.
            </a>
          </div>
          <div
            class="w-[300px] h-[200px] p-10 rounded-3xl shadow-xl border-spacing-6 bg-teal-50 cursor-pointer"
            data-aos="fade-right"
            data-aos-duration="1500"
          >
            <a class="relative h-[100px] rounded overflow-hidden"> <strong>Saviours</strong>
              <br>
              We aim to provide best experience to our customers. To gain thier trust and reliability we provide trained & verified Pickup Staff.
            </a>
          </div>
        </section>
      </div>
    <!-- ------------------------------------------Why Us Ends --------------------------------------------------- -->

    <!-- ------------------------------------------Testimonials Starts --------------------------------------------------- -->
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Testimonials</h1>
        <div class="flex flex-wrap -m-4">
          <div class="p-4 md:w-1/2 w-full">
            <div class="h-full bg-gray-100 p-8 rounded"data-aos="fade-right"
            data-aos-duration="1500"data-aos-delay="500">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-blank-1000 mb-4" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
              </svg>
              <p class="leading-relaxed mb-6">The Trash Master Team was really professional and their services the best that I have seen in my entire life of 45 years. Could not have asked anything more. Simply awesome 👏</p>
              <a class="inline-flex items-center">
                <span class="flex-grow flex flex-col pl-4">
                  <span class="title-font font-medium text-gray-900">Anonymous</span>
                  <span class="text-gray-500 text-sm">Housemaker</span>
                </span>
              </a>
            </div>
          </div>
          <div class="p-4 md:w-1/2 w-full">
            <div class="h-full bg-gray-100 p-8 rounded" data-aos="fade-right"
            data-aos-duration="1500">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-blank-1000 mb-4" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
              </svg>
              <p class="leading-relaxed mb-6">Was fed up of our local society kabadiwala who did as per his own whim bcoz of the monopoly.. tried trash master and found the service to be smooth, transparent, convenient and extremely professional.. great initiative.. will surely use again and recommend to all.</p>
              <a class="inline-flex items-center">
                <span class="flex-grow flex flex-col pl-4">
                  <span class="title-font font-medium text-gray-900">Anonymous</span>
                  <span class="text-gray-500 text-sm">Designer</span>
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap -m-4">
          <div class="p-4 md:w-1/2 w-full">
            <div class="h-full bg-gray-100 p-8 rounded"data-aos="fade-right"
            data-aos-duration="1500"data-aos-delay="500">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-blank-1000 mb-4" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
              </svg>
              <p class="leading-relaxed mb-6">It was such a pleasant experience with trash master, the process was so simple, i just simply filled the details online and selected the date and time for pickup, the concerned person contacted me and reached at the desired time,</p>
              <a class="inline-flex items-center">
                <span class="flex-grow flex flex-col pl-4">
                  <span class="title-font font-medium text-gray-900">Anonymous</span>
                  <span class="text-gray-500 text-sm">Business Man</span>
                </span>
              </a>
            </div>
          </div>
          <div class="p-4 md:w-1/2 w-full">
            <div class="h-full bg-gray-100 p-8 rounded"data-aos="fade-right"
            data-aos-duration="1500">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-blank-1000 mb-4" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
              </svg>
              <p class="leading-relaxed mb-6">Hassel free good experience with trash master. Home pickup service is very convenient, and a great initiative to save the environment. Will surely recommend to others.</p>
              <a class="inline-flex items-center">
                <span class="flex-grow flex flex-col pl-4">
                  <span class="title-font font-medium text-gray-900">Anonymous</span>
                  <span class="text-gray-500 text-sm">Teacher</span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- ------------------------------------------Testimonials Ends --------------------------------------------------- -->

    <!-- ***********************************  Footer starts here  *************************************-->
    <section class="text-black-600 body-font bg-green-600">
      <div class="container flex flex-wrap px-5 py-24 mx-auto items-center">
        <div class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white-100">Trash Master</h1>
          <p class="leading-relaxed text-base">A new wave of leaders had arrived, and they are *Trash Master*.
            Helping local venders and garbage collectors, by buying the waste material collected by them, on a fair price and sell it to recyclers, small business and NGOs to reuse the waste, it will be a powerful way to promote sustainability & environmental awareness.</p>
          <!-- <a class="text-indigo-500 inline-flex items-center mt-4">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a> -->
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

        <!-- ***********************************  Footer ends here  *************************************-->


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>