<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- lower links must connect for schedule page -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Trash Master</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />

    <!-- FOR NAV BAR -->
    <link rel="stylesheet" href="nav.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
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
        <li><a href="manage.php">Awareness</a></li>
        <li><a href="about.php" target="_blank">About Us</a></li>
        <li><a href="Community.php">Community</a></li>
      </ul>
    </nav>
    <!-----------------------------CHANGING IMAGE COROUSEL STARTS----------------------->
    <div
      id="carouselExampleIndicators"
      class="carousel slide z-3"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active img-fluid" data-bs-interval="3000">
          <img src="img/waste3.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item img-fluid" data-bs-interval="3000">
          <img src="img/waste2.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item img-fluid" data-bs-interval="3000">
          <img src="img/waste1.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-----------------------------CHANGING IMAGE COROUSEL ENDS----------------------->

    <!-- ***********************************  TYPES OF WASTE STARTS *************************************-->

    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap w-full mb-20">
          <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
            <h1
              class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"
            >
              Types of Waste
            </h1>
            <div class="h-1 w-20 bg-indigo-500 rounded"></div>
          </div>
          <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">
            Waste refer to materials or substances that are thrown away or no
            longer needed. It includes items like trash, Garbage and discarded
            materials.
          </p>
        </div>
        <div class="flex flex-wrap -m-4">
          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/organic waste.jpg"
                alt="content"
              />

              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                Organic Waste
              </h2>
              <p class="leading-relaxed text-base">
                This includes food scraps, yard waste, and other biodegradable
                materials. It can be composted to create nutrients-rich soil.
              </p>
            </div>
          </div>
          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/recyclable waste.jpg"
                alt="content"
              />

              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                Recyclable Waste
              </h2>
              <p class="leading-relaxed text-base">
                Materials like paper, cupboards, plastic, glass and metals can
                be recycled into new products. Remember to separate them for
                recycling.
              </p>
            </div>
          </div>
          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/hazardous waste.png"
                alt="content"
              />

              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                Hazardous Waste
              </h2>
              <p class="leading-relaxed text-base">
                This includes Chemicals batteries, electronic waste and curtain
                household products. It requires special handling.
              </p>
            </div>
          </div>
          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/electronic waste.jpg"
                alt="content"
              />

              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                Electronic Waste
              </h2>
              <p class="leading-relaxed text-base">
                This refers to discarded electronic devices like computers,
                phones and appliances. They contain valuable materials.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***********************************  TYPES OF WASTE ENDS *************************************-->

    <!-- *************************  FLOW CHART PROCESS OF WASTE MANAGEMENT STARTS *************************************-->
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <div
          class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10"
        >
          <div class="w-full sm:p-4 px-4 mb-6">
            <h1 class="title-font font-medium text-xl mb-2 text-gray-900">
              WASTE MANAGEMENT
            </h1>
            <div class="leading-relaxed">
              Process of handling, treating and disposing of waste in a
              responsible and sustainable manner. It involves various practices
              like recycling, composting & reducing waste to minimize its
              environmental impact.
            </div>
          </div>
          <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
            <p class="leading-relaxed">Collection</p>
          </div>
          <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
            <p class="leading-relaxed">Processing</p>
          </div>
          <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
            <p class="leading-relaxed">Segregation</p>
          </div>
          <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
            <p class="leading-relaxed">Storage</p>
          </div>
        </div>
        <div
          class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0"
        >
          <img
            class="object-cover object-center w-full h-full"
            src="img/manage.png"
            alt="stats"
          />
        </div>
      </div>
    </section>
    <!-- *************************  FLOW CHART PROCESS OF WASTE MANAGEMENT STARTS *************************************-->

    <!-- *************************  HARMFUL EFFECTS OF WASTE STARTS *************************************-->

    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
          <h1
            class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest"
          >
            HARMFUL EFFECTS OF IMPROPER WASTE
          </h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
            The environmental costs of waste, and especially of improper
            treatment of waste, can be tremendous to human health and to the
            environment. These include air pollution, strong odors, groundwater
            contamination, illnesses, and much more.
          </p>
        </div>
        <div class="flex flex-wrap -m-4">
          <div class="p-4 lg:w-1/2">
            <div
              class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left"
            >
              <img
                alt="team"
                class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                src="img/environmental pollution.jpg"
              />
              <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">
                  Environmental Pollution
                </h2>
                <p class="mb-4">
                  When waste is not managed properly, it can contaminate soil, water and air, leading to pollution and harming ecosystem.
                </p>
              </div>
            </div>
          </div>
          <div class="p-4 lg:w-1/2">
            <div
              class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left"
            >
              <img
                alt="team"
                class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                src="img/health risks.png"
              />
              <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">
                  Health Risks
                </h2>
                <p class="mb-4">
                  Improper disposal of hazardous waste can pose health risks to human and animal. Exposure to toxic substances can cause illnesses and diseases..
                </p>
                
              </div>
            </div>
          </div>
          <div class="p-4 lg:w-1/2">
            <div
              class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left"
            >
              <img
                alt="team"
                class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                src="img/resources delpletion.jpg"
              />
              <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">
                  Resources Depletion
                </h2>
                <p class="mb-4">
                  When waste is not recycled or reused, valuable resources are wasted. This puts a strain on natural resources and contributes to resource depletion.
                </p>
                
              </div>
            </div>
          </div>
          <div class="p-4 lg:w-1/2">
            <div
              class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left"
            >
              <img
                alt="team"
                class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                src="img/climate chane.jpg"
              />
              <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900">
                  Climate Change
                </h2>
                <p class="mb-4">
                  Landfills and incineration of waste release greenhouse gases, contributing to climate change and global warming.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
              <a class="text-black-600 hover:text-black-800" href="#">Home</a>
            </li>
            <li class="lg:w-1/3 mb-1 w-1/2">
              <a class="text-black-600 hover:text-black-800" href="#">Schedule a Pickup</a>
            </li>
            <li class="lg:w-1/3 mb-1 w-1/2">
              <a class="text-black-600 hover:text-black-800" href="#">Awareness</a>
            </li>
            <li class="lg:w-1/3 mb-1 w-1/2">
              <a class="text-black-600 hover:text-black-800" href="#">About us</a>
            </li>
            <li class="lg:w-1/3 mb-1 w-1/2">
              <a class="text-black-600 hover:text-black-800" href="#">Community</a>
            </li>
          </nav>
        </div>
      </div>
    </section>

        <!-- ***********************************  Footer ends here  *************************************-->

    <!-- *************************  HARMFUL EFFECTS OF WASTE ENDS *************************************-->
  </body>
</html>
