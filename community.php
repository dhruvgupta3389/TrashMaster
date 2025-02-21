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

        <nav aria-label="breadcrumb" style="position: absolute; top: 50px; left: 15px; text-decoration: underline; color: #3ab34a;">
          <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Community</li>
          </ol>
        </nav>
        </header>
        
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4" style="text-align: center;">Our Esteemed Partners</h1>
            <div class="flex flex-wrap -m-4">
              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class=" object-center w-full h-full block" src="img/aasra.png">
                </a>
              </div>
              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class=" object-center w-full h-full block" src="img/Akriti logo.png">
                </a>
              </div>
              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class=" object-center w-full h-full block" src="img/Deeksha.png">
                </a>
              </div>
              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class=" object-center w-full h-full block" src="img/Swasth gram.webp">
                </a>
              </div>
              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class=" object-center w-full h-full block" src="img/shuddhi-ngo-logo.webp">
                </a>
              </div>
              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class=" object-center w-full h-full block" src="img/Cleantech.png">
                </a>
              </div>
              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class=" object-center w-full h-full block" src="img/hih-logo.svg">
                </a>
              </div>
              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                  <img alt="ecommerce" class=" object-center w-full h-full block" src="img/many more.webp">
                </a>
              </div>
            </div>
          </div>
        </section>

        <div class="container my-24 mx-auto md:px-6">
            <!-- Section: Design Block -->
            <section class="mb-32 text-center">
              <h2 class="mb-12 pb-4 text-center text-3xl font-bold">
                Newsletter
              </h2>
          
              <div class="grid gap-6 lg:grid-cols-3 xl:gap-x-12" >
                <div class="mb-6 lg:mb-0">
                  <div
                    class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="flex">
                      <div
                        class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                        data-te-ripple-init data-te-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp" class="w-full" />
                        <a href="#!">
                          <div
                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="p-6">
                      <h5 class="mb-3 text-lg font-bold">Distributing Organic Manure to Farmenrs</h5>
                      <p class="mb-4 text-neutral-500 dark:text-neutral-300">
                        <small>Published <u>12.01.2022</u> by
                          <a href="#!">Dainik Jagran</a></small>
                      </p>
                      <p class="mb-4 pb-2">
                        Team Trash Masters Distributed Organic Manure to Farmers.
                      </p>
                      <a href="#!" data-te-ripple-init data-te-ripple-color="light"
                        class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">Read
                        more</a>
                    </div>
                  </div>
                </div>
          
                <div class="mb-6 lg:mb-0">
                  <div
                    class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="flex">
                      <div
                        class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                        data-te-ripple-init data-te-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp" class="w-full" />
                        <a href="#!">
                          <div
                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="p-6">
                      <h5 class="mb-3 text-lg font-bold">Distributing Organic Manure to Farmenrs</h5>
                      <p class="mb-4 text-neutral-500 dark:text-neutral-300">
                        <small>Published <u>12.01.2022</u> by
                          <a href="#!">Dainik Jagran</a></small>
                      </p>
                      <p class="mb-4 pb-2">
                        Team Trash Masters Distributed Organic Manure to Farmers.
                      </p>
                      <a href="#!" data-te-ripple-init data-te-ripple-color="light"
                        class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">Read
                        more</a>
                    </div>
                  </div>
                </div>
          
                <div class="mb-6 lg:mb-0">
                  <div
                    class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="flex">
                      <div
                        class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                        data-te-ripple-init data-te-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp" class="w-full" />
                        <a href="#!">
                          <div
                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="p-6">
                      <h5 class="mb-3 text-lg font-bold">Distributing Organic Manure to Farmenrs</h5>
                      <p class="mb-4 text-neutral-500 dark:text-neutral-300">
                        <small>Published <u>12.01.2022</u> by
                          <a href="#!">Dainik Jagran</a></small>
                      </p>
                      <p class="mb-4 pb-2">
                        Team Trash Masters Distributed Organic Manure to Farmers.
                      </p>
                      <a href="#!" data-te-ripple-init data-te-ripple-color="light"
                        class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">Read
                        more</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Section: Design Block -->
          </div>

        <div class="container my-24 mx-auto md:px-6">
            <!-- Section: Design Block -->
            <section class="mb-32 text-center md:text-left">
              <h2 class="mb-12 text-center text-3xl font-bold">Latest articles</h2>
          
              <div class="mb-12 grid items-center gap-x-6 md:grid-cols-2 xl:gap-x-12">
                <div class="mb-6 md:mb-0">
                  <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                    data-te-ripple-init data-te-ripple-color="light">
                    <img src="img/blog.jpg" class="w-full" alt="Louvre" />
                    <a href="#!">
                      <div
                        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                      </div>
                    </a>
                  </div>
                </div>
          
                <div>
                  <h3 class="mb-3 text-2xl font-bold">Advanced waste classification with Machine Learning</h3>
                  <div
                    class="mb-3 flex items-center justify-center text-sm font-medium text-danger dark:text-danger-500 md:justify-start">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-2 h-5 w-5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                    </svg>
                    Travels -->
                  </div>
                  <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                    <small>Published <u>13.01.2022</u> by
                      <a href="#!">Daniel García Solla</a>
                    </small>
                  </p>
                  <p class="text-neutral-500 dark:text-neutral-300">
                    Improving waste classification techniques using Data Science and Machine Learning.
                  </p>
                </div>
              </div>
          
              <div class="mb-12 grid items-center gap-x-6 md:grid-cols-2 xl:gap-x-12">
                <div class="mb-6 md:order-2 md:mb-0">
                  <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                    data-te-ripple-init data-te-ripple-color="light">
                    <img src="img/blog1.png" class="w-full" alt="Louvre" />
                    <a href="#!">
                      <div
                        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                      </div>
                    </a>
                  </div>
                </div>
          
                <div class="md:order-1">
                  <h3 class="mb-3 text-2xl font-bold">The Invisible Waste</h3>
                  <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                    <small>Published <u>12.01.2022</u> by
                      <a href="#!">Halley Frank</a></small>
                  </p>
                  <p class="text-neutral-500 dark:text-neutral-300">
                    Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet diam
                    orci, nec ornare metus semper sed. Integer volutpat ornare erat
                    sit amet rutrum.
                  </p>
                </div>
              </div>
          
              <div class="mb-12 grid items-center gap-x-6 md:grid-cols-2 xl:gap-x-12">
                <div class="mb-6 md:mb-0">
                  <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                    data-te-ripple-init data-te-ripple-color="light">
                    <img src="img/blog2.jpg" class="w-full" alt="Louvre" />
                    <a href="#!">
                      <div
                        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                      </div>
                    </a>
                  </div>
                </div>
          
                <div>
                  <h3 class="mb-3 text-2xl font-bold">Waste in Space: Where do they “eventually” go?</h3>
                    <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                    <small>Published <u>10.01.2022</u> by
                      <a href="#!">Joe Svan</a></small>
                  </p>
                  <p class="text-neutral-500 dark:text-neutral-300">
                    As we continue to push the boundaries of technological innovation, we are also creating an....
                  </p>
                </div>
              </div>
            </section>
            <!-- Section: Design Block -->
          </div>
</body>
</html>