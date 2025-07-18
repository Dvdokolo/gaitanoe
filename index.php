<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gaitanoe Properties | Where Integrity Meets Real Estate</title>

  <meta name="description" content="Gaitanoe Properties offers premium real estate solutions—buy, sell, or rent properties with ease and confidence across Nigeria.F">

  <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

 <style>

    /* Simple transition for smooth hover effects */
    .transition-all {
      transition: all 0.3s ease-in-out;
    }

    /* Custom hover text color using arbitrary values */
    .hover-text-brand:hover {
      color: rgb(201, 39, 26);
    }

    /* Custom hover background color */
    .hover-bg-brand:hover {
      background-color: #002f60;
      /* Using a valid 6-digit hex code */
    }


    .footer-divider {
      border-top: 1px solid #002f60;
      margin: 1.5rem 0;
    }
  </style>
  <link rel="stylesheet" href="custom.css">  
</head>

<body class="relative min-h-screen text-[#002f61]    font-inter">

  <div class="h-screen ">
    <video autoplay muted loop playsinline class="fixed top-0 min-h-screen left-0  w-full object-cover  z-[-1]">
      <source src="images/vid.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <!-- App Container -->
    <div id="app" class="min-h-screen flex flex-col bg-black/30">
      <script>
        // Add this script to handle the scroll effect
        document.addEventListener('DOMContentLoaded', function () {
          const header = document.querySelector('header');
          const nav = document.querySelector('nav');
          const logo = document.querySelector('nav img');
          const searchIcon = document.querySelector('.lg\\:block svg'); // Target the search icon
          const menuItems = document.querySelectorAll('nav a, nav button');
          const hr = document.querySelector('nav hr');

          window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
              // Scrolled state
              nav.classList.remove('bg-transparent');
              nav.classList.add('bg-white', 'shadow-md');
              // logo.classList.add('invert'); // If you want to invert the logo color
              menuItems.forEach(item => {
                item.classList.remove('text-white');
                item.classList.add('text-gray-800');
              });
              hr.classList.add('hidden');
              searchIcon.classList.remove('text-white');
              searchIcon.classList.add('text-[#002f60]'); // Change to dark blue when scrolled
            } else {
              // Top of page state
              nav.classList.add('bg-transparent');
              nav.classList.remove('bg-white', 'shadow-md');
              logo.classList.remove('invert');
              menuItems.forEach(item => {
                item.classList.add('text-white');
                item.classList.remove('text-gray-800');
              });
              hr.classList.remove('hidden');
              searchIcon.classList.add('text-white');
              searchIcon.classList.remove('text-[#002f60]'); // Back to white at top
            }
          });
        });
      </script>
      <!-- Header -->
      <header class="relative">
        <!-- Main Navigation -->
        <nav class="bg-transparent text-white lg:fixed z-50 w-full transition-all duration-500 ease-in-out" style="margin-top:-11px">
          <div class="container mx-auto px-[1rem] md:px-[5rem]">
            <div class="flex justify-between items-center">
              <!-- Logo -->
              <div>
                <a href="index">
                  <img src="images/logo1.png" alt="Logo" class="h-[100px] p-2 w-auto">
                </a>
              </div>

              <!-- Desktop Menu -->
              <div class="hidden lg:flex items-center space-x-2" style="margin-bottom: -10px;">
                <!-- Each menu item with a dropdown is a 'group' -->
                <!-- Buy -->
                <div class="group relative">
                  <button class="px-4 py-8 text-white hover-bg-brand hover-text-brand transition-all">Buy</button>
                  <div class="group-hover:block hidden absolute top-full left-0 bg-black/60  backdrop-blur-sm py-6 z-50">
                    <div class="container mx-auto w-[12.5rem] space-y-1">
                      <a href="properties-for-sale"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Properties
                        for sale</a>
                      <a href="property-alert"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Property
                        Alert</a>
                      <a href="recent-sales" 
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Recent
                        Sales</a>
                    </div>
                  </div>
                </div>

                <!-- Rent -->
                <div class="group relative">
                  <button class="px-4 py-8 text-white hover-bg-brand hover-text-brand transition-all">Rent</button>
                  <div class="group-hover:block hidden absolute top-full left-0 bg-black/60  backdrop-blur-sm py-6 z-50">
                    <div class="container mx-auto w-[12.5rem] space-y-1">
                       <a href="properties-for-rent" class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 leading-relaxed">Rental Properties</a>
                <a href="recent-leases"class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 leading-relaxed">Recent leases</a>
                <a href="property-alert"  class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 leading-relaxed">Property Alert</a>
                <a href="tenant-information" class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 leading-relaxed">Tenant Information</a>

                    </div>
                  </div>
                </div>

                <!-- Sell -->
                <div class="group relative">
                  <button class="px-4 py-8 text-white hover-bg-brand hover-text-brand transition-all">Sell</button>
                  <div class="group-hover:block hidden absolute top-full left-0 bg-black/60  backdrop-blur-sm py-6 z-50">
                    <div class="container mx-auto w-[12.5rem] space-y-1">
                     <a href="sell-with-us"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Sell with us</a>
                      <a href="free-appraisal-manage"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Free Apraisal</a>
                      <a href="recent-sales"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Recent Sales</a>  
                    </div>
                  </div>
                </div>

                <!-- Manage -->
                <div class="group relative">
                  <button class="px-4 py-8 text-white hover-bg-brand hover-text-brand transition-all">Manage</button>
                  <div class="group-hover:block hidden absolute top-full left-0 bg-black/60  backdrop-blur-sm py-6 z-50">
                    <div class="container mx-auto w-[12.5rem] space-y-1">
                      <a href="service-guarantee"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Service guarantee
                        </a>
                      <a href="lease-with-us-manage"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Lease with us
                        </a>
                    
                      <a href="free-appraisal-manage"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">
                        Free Appraisal</a>
                    </div>
                  </div>
                </div>


                <!-- Services -->
                <a href="services" class="px-4 py-8 text-white hover-bg-brand hover-text-brand transition-all">Services</a>

                <!-- About Us -->
                <div class="group relative">
                  <button class="px-4 py-8 text-white hover-bg-brand hover-text-brand transition-all">About Us</button>
                  <div class="group-hover:block hidden absolute top-full left-0 bg-black/60  backdrop-blur-sm py-6 z-50">
                    <div class="container mx-auto w-[12.5rem] space-y-1">
                      <a href="our-team"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Our
                        Team</a>
                      <a href="rise-statement"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Rise
                        Assessment</a>
                    </div>
                  </div>
                </div>
                <!-- Contact -->
                <a href="contact-us" class="px-4 py-8 text-white hover-bg-brand hover-text-brand transition-all">Contact us</a>


          

              </div>

                  <!-- Login -->
                <div class="hidden lg:block group relative">
                  <button class="px-4 py-8 text-white hover-bg-brand hover-text-brand transition-all">Account Access</button>
                  <div class="group-hover:block hidden absolute top-full left-0 bg-black/60  backdrop-blur-sm py-6 z-50">
                    <div class="container mx-auto w-[12.5rem] space-y-1">
                      <a href="staff-portal"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Staff
                        Portal</a>
                      <a href="tenant-portal"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Tenants
                        Portal</a>
                      <a href="owner-portal"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Owners
                        Portal</a>
                    </div>
                  </div>
                </div>

              <!-- Mobile Menu Button -->
              <div class="lg:hidden ">
                <button id="mobile-menu-button" class="p-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <!-- Horizontal Rule -->
          <hr class="border-white">
        </nav>

 <!-- Mobile Menu -->
<div id="mobile-menu" class="hidden  lg:hidden bg-black/90 absolute w-full z-40">
  <div class="px-4 pt-2 pb-3 space-y-2 mt-[-1rem] lg:mt-[4rem] text-white text-base">

    <!-- Buy -->
    <div>
      <button class="w-full text-left py-2 px-4 hover:bg-[#002f60]" onclick="toggleSubmenu('buy-submenu')"></button>
      <div id="buy-submenu" class="hidden pl-6 space-y-1 text-sm">
        <a href="properties-for-sale" class="block py-1 hover:text-orange-500">Properties for sale</a>
        <a href="property-alert" class="block py-1 hover:text-orange-500">Property Alert</a>
        <a href="recent-sales"  class="block py-1 hover:text-orange-500">Recent Sales</a>
      </div>
    </div>
    <!-- Buy -->
    <div>
      <button class="w-full text-left py-2 px-4 hover:bg-[#002f60]" onclick="toggleSubmenu('by-submenu')">Buy</button>
      <div id="by-submenu" class="hidden pl-6 space-y-1 text-sm">
        <a href="properties-for-rent" class="block py-1 hover:text-orange-500">Properties for rent</a>
        <a href="property-alert"  class="block py-1 hover:text-orange-500">Property Alert</a>
        <a href="tenant-information" class="block py-1 hover:text-orange-500">Recent Sales</a>
      </div>
    </div>

    <!-- Rent -->
    <div>
      <button class="w-full text-left py-2 px-4 hover:bg-[#002f60]" onclick="toggleSubmenu('rent-submenu')">Rent</button>
      <div id="rent-submenu" class="hidden pl-6 space-y-1 text-sm">
       <a href="properties-for-rent" class="block py-1 hover:text-orange-500">Properties for rent</a>
          <a href="recent-leases" class="block py-1 hover:text-orange-500">Recent leases</a>
          <a href="property-alert" class="block py-1 hover:text-orange-500">Properties Alert</a>
          <a href="tenant-information" class="block py-1 hover:text-orange-500">Tenant Information</a>
      </div>
    </div>

    <!-- Sell -->
    <div>
      <button class="w-full text-left py-2 px-4 hover:bg-[#002f60]" onclick="toggleSubmenu('sell-submenu')">Sell</button>
      <div id="sell-submenu" class="hidden pl-6 space-y-1 text-sm">
       <a href="sell-with-us" class="block py-1 hover:text-orange-500"> Sell with us</a>
          <a href="free-apraisal" class="block py-1 hover:text-orange-500">Free Apraisal</a>
          <a href="recent-sales" class="block py-1 hover:text-orange-500"> Recent Sales</a>
      </div>
    </div>

    <!-- Manage -->
    <div>
      <button class="w-full text-left py-2 px-4 hover:bg-[#002f60]" onclick="toggleSubmenu('manage-submenu')">Manage</button>
      <div id="manage-submenu" class="hidden pl-6 space-y-1 text-sm">
       <a href="service-guarantee" class="block py-1 hover:text-orange-500">Service guarantee</a>
          <a href="lease-with-us-manage" class="block py-1 hover:text-orange-500">Lease with us</a>
          <a href="free-appraisal-manage" class="block py-1 hover:text-orange-500">Free Appraisal</a>
      </div>
    </div>

    <!-- Services -->
    <a href="services" class="block py-2 px-4 hover:bg-[#002f60]">Services</a>

    <!-- About Us -->
    <div>
      <button class="w-full text-left py-2 px-4 hover:bg-[#002f60]" onclick="toggleSubmenu('about-submenu')">About Us</button>
      <div id="about-submenu" class="hidden pl-6 space-y-1 text-sm">
        <a href="our-team" class="block py-1 hover:text-orange-500">Our Team</a>
        <a href="rise-statement" class="block py-1 hover:text-orange-500">Rise Statement</a>
      </div>
    </div>

    <!-- Contact Us -->
    <a href="contact-us" class="block py-2 px-4 hover:bg-[#002f60]">Contact us</a>

    <!-- Login -->
    <div>
      <button class="w-full text-left py-2 px-4 hover:bg-[#002f60]" onclick="toggleSubmenu('login-submenu')">Login</button>
      <div id="login-submenu" class="hidden pl-6 space-y-1 text-sm">
        <a href="staff-portal" class="block py-1 hover:text-orange-500">Staff Portal</a>
        <a href="tenant-portal" class="block py-1 hover:text-orange-500">Tenants Portal</a>
        <a href="owner-portal" class="block py-1 hover:text-orange-500">Owners Portal</a>
      </div>
    </div>

  </div>
</div>

      </header>

<!-- Toggle Script -->
<script>
  function toggleSubmenu(id) {
    const submenu = document.getElementById(id);
    submenu.classList.toggle('hidden');
  }
</script>




      <!-- Hero Section -->
      <section
        class="relative flex flex-col items-center justify-center text-center lg:mt-[4rem] text-white min-h-[calc(100vh-120px)] px-4">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 drop-shadow-lg">Smart Real Estate Investments <br>That Grow With You</h1>
        <a href="contact-us"
          class="inline-block bg-[#002F6180] border-2 border-white text-white px-6 py-3 rounded-lg text-xl font-medium hover:text-[#cc6f2a] hover:bg-white duration-200 ease-in-out transition-all">Contact
          us</a>

      </section>


    </div>

  </div>


  <div class="bg-white pt-[5rem]">





    <!--  -->
    <!-- Gaitanoe Highlights -->
    <!--  -->

    <h1 class="text-4xl font-bold text-center mb-[5rem] ">
      Our Highlights For <?php echo date('Y'); ?>
    </h1>



    <div class="flex flex-wrap justify-evenly text-[15px] mx-[2rem] lg:mx-[4rem] mb-[5rem]">
      <!-- 1 -->
      <div class="w-[210px] mx-auto mb-10 ">
        <img src="images/properties-sold.webp" class="h-[100px] w-[100px] rounded-full mb-2 mx-auto" alt="">
        <h1 class=" font-bold text-center mb-3">
          475
        </h1>
        <h1 class="text-center">
          PROPERTIES SOLD
        </h1>
      </div>



      <!-- 2 -->
      <div class="w-[250px]  mx-auto mb-10 ">
        <img src="images/properties-sold.webp" class="h-[100px] w-[100px] rounded-full mb-2 mx-auto" alt="">
        <h1 class=" font-bold text-center mb-3">
          1481
        </h1>
        <h1 class="text-center">
          PROPERTIES LEASED
        </h1>
      </div>



      <!-- 3 -->
      <div class="w-[250px] mx-auto mb-10 ">
        <img src="images/DOM-sales.webp" class="h-[100px] w-[100px] rounded-full mb-2 mx-auto" alt="">
        <h1 class=" font-bold text-center mb-3">
          31

        </h1>
        <h1 class="text-center mb-2">
          SALES:
        </h1>
        <h1 class="text-center">
          AVERAGE DAYS ON MARKET
        </h1>
      </div>



      <!-- 4 -->
      <div class="w-[250px] mx-auto mb-10 ">
        <img src="images/DOM-sales.webp" class="h-[100px] w-[100px] rounded-full mb-2 mx-auto" alt="">
        <h1 class=" font-bold text-center mb-3">
          20
        </h1>
        <h1 class="text-center mb-2">
          RENTALS:
        </h1>
        <h1 class="text-center">
          AVERAGE DAYS ON MARKET
        </h1>
      </div>



      <!-- 5 -->
      <div class="w-[250px] mx-auto mb-10 ">
        <img src="images/languages.webp" class="h-[100px] w-[100px] rounded-full mb-2 mx-auto" alt="">
        <h1 class=" font-bold text-center mb-3">
          15
        </h1>
        <h1 class="text-center mb-2">
          LANGUAGES SPOKEN AT
        </h1>
        <h1 class="text-center">
          GAITANOE
        </h1>
      </div>



    </div>



    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full">
      <!-- Image Card Start -->


      <!-- Copy and paste as needed -->

      <!-- 1 -->
      <div class="relative group overflow-hidden">
        <img src="images/1.jpg"
          class="w-full h-full object-cover  transition-transform duration-500 group-hover:scale-110" alt="">
        <div class="absolute inset-0 bg-black/30 hover:bg-transparent">
          <div class="m-auto">

          </div>
        </div>
        <div
          class="absolute inset-0 flex items-center justify-center  transition-all duration-500 group-hover:translate-y-[-1rem]">
          <h1 class="text-white text-4xl font-bold text-center">Our Team</h1>

        </div>
        <div
          class="absolute inset-0 flex items-center justify-center transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:translate-y-[2rem]">

          <a href="our-team"> <button class="bg-orange-500 text-white py-2 px-4 rounded">Learn More</button></a>
        </div>
      </div>


      <!-- 2 -->
      <div class="relative group overflow-hidden">
        <img src="images/2.jpg"
          class="w-full h-full object-cover  transition-transform duration-500 group-hover:scale-110" alt="">
        <div class="absolute inset-0 bg-black/30 hover:bg-transparent">
          <div class="m-auto">

          </div>
        </div>
        <div
          class="absolute inset-0 flex items-center justify-center  transition-all duration-500 group-hover:translate-y-[-1rem]">
          <h1 class="text-white text-4xl font-bold text-center">Buy</h1>

        </div>
        <div
          class="absolute inset-0 flex items-center justify-center transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:translate-y-[2rem]">

          <a href="properties-for-sale"> <button class="bg-orange-500 text-white py-2 px-4 rounded">Learn More</button></a>
        </div>
      </div>


      <!-- 3 -->
      <div class="relative group overflow-hidden">
        <img src="images/3.jpg"
          class="w-full h-full object-cover  transition-transform duration-500 group-hover:scale-110" alt="">
        <div class="absolute inset-0 bg-black/30 hover:bg-transparent">
          <div class="m-auto">

          </div>
        </div>
        <div
          class="absolute inset-0 flex items-center justify-center  transition-all duration-500 group-hover:translate-y-[-1rem]">
          <h1 class="text-white text-4xl font-bold text-center">Sell</h1>

        </div>
        <div
          class="absolute inset-0 flex items-center justify-center transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:translate-y-[2rem]">

          <a href="sell-with-us"> <button class="bg-orange-500 text-white py-2 px-4 rounded">Learn More</button></a>
        </div>
      </div>


      <!-- 4 -->
      <div class="relative group overflow-hidden">
        <img src="images/4.jpg"
          class="w-full h-full object-cover  transition-transform duration-500 group-hover:scale-110" alt="">
        <div class="absolute inset-0 bg-black/30 hover:bg-transparent">
          <div class="m-auto">

          </div>
        </div>
        <div
          class="absolute inset-0 flex items-center justify-center  transition-all duration-500 group-hover:translate-y-[-1rem]">
          <h1 class="text-white text-4xl font-bold text-center">Rent</h1>

        </div>
        <div
          class="absolute inset-0 flex items-center justify-center transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:translate-y-[2rem]">

          <a href="properties-for-rent"> <button class="bg-orange-500 text-white py-2 px-4 rounded">Learn More</button></a>
        </div>
      </div>


      <!-- 5 -->
      <div class="relative group overflow-hidden">
        <img src="images/5.jpg"
          class="w-full h-full object-cover  transition-transform duration-500 group-hover:scale-110" alt="">
        <div class="absolute inset-0 bg-black/30 hover:bg-transparent">
          <div class="m-auto">

          </div>
        </div>
        <div
          class="absolute inset-0 flex items-center justify-center  transition-all duration-500 group-hover:translate-y-[-1rem]">
          <h1 class="text-white text-4xl font-bold text-center">Manage</h1>

        </div>
        <div
          class="absolute inset-0 flex items-center justify-center transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:translate-y-[2rem]">

          <a href="service-guarantee"> <button class="bg-orange-500 text-white py-2 px-4 rounded">Learn More</button></a>
        </div>
      </div>


      <!-- 6 -->
      <div class="relative group overflow-hidden">
        <img src="images/6.jpg"
          class="w-full  object-cover h-[20rem] transition-transform duration-500 group-hover:scale-110" alt="">
        <div class="absolute inset-0 bg-black/30 hover:bg-transparent">
          <div class="m-auto">

          </div>
        </div>
        <div
          class="absolute inset-0 flex items-center justify-center  transition-all duration-500 group-hover:translate-y-[-1rem]">
          <h1 class="text-white text-4xl font-bold text-center">Get Real</h1>

        </div>
        <div
          class="absolute inset-0 flex items-center justify-center transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:translate-y-[2rem]">

          <a href="contact-us"> <button class="bg-orange-500 text-white py-2 px-4 rounded">Learn More</button></a>
        </div>
      </div>



    </div>



    <!-- Featured Properties -->

    <div style="margin-top:100px;">

      <div>

        <h1 class="text-5xl mx-[2rem] lg:mx-[7rem] font-bold mb-[3rem] ">
          Featured Properties
        </h1>
        <!-- App Container -->
        <div id="app" class="min-h-screen flex flex-col">


          <!-- Main Content -->
          <main class="flex-grow mx-[2rem] lg:mx-[7rem] bg-white">
            <!-- Property Listings Section -->
            <section id="property-listings" class="py-16 sm:py-20">
              <div class="container mx-auto px-4">
                <!-- Section Header and Filters -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-12">
                  <h1 class=" text-[#002f61] mb-6 sm:mb-0">Find your next property with Gaitanoe</h1>
                  <div id="property-filters"
                    class="flex items-center justify-start sm:justify-center space-x-4 sm:space-x-6 flex-wrap">
                    <button data-target="for-sale"
                      class="property-filter-btn group flex items-center space-x-2 focus:outline-none">
                      <span class="group-hover:text-[#002f61] font-semibold transition-colors duration-300">FOR
                        SALE</span>
                      <div class="w-6 h-px bg-gray-400 group-hover:bg-[#002f61]"></div>
                    </button>
                    <button data-target="for-lease"
                      class="property-filter-btn group flex items-center space-x-2 focus:outline-none active">
                      <span class="group-hover:text-[#002f61] font-semibold transition-colors duration-300">FOR
                        LEASE</span>
                      <div class="w-6 h-px bg-gray-400 group-hover:bg-[#002f61]"></div>
                    </button>
                    <button data-target="recent-sales"
                      class="property-filter-btn group flex items-center space-x-2 focus:outline-none">
                      <span class="group-hover:text-[#002f61] font-semibold transition-colors duration-300">RECENT
                        SALES</span>
                      <div class="w-6 h-px bg-gray-400 group-hover:bg-[#002f61]"></div>
                    </button>
                    <button data-target="recent-leases" class="property-filter-btn group focus:outline-none">
                      <span class="group-hover:text-[#002f61] font-semibold transition-colors duration-300">RECENT
                        LEASES</span>
                    </button>
                  </div>
                </div>

                <!-- Property Cards Container -->
                <div id="card-container">
                  <!-- FOR LEASE CARDS (Visible by default) -->
                  <div id="for-lease-cards"
                    class="property-card-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="border overflow-hidden shadow-lg flex flex-col">
                      <img src="images/lease1.jpg"
                        alt="House for Lease" class="w-full h-64 object-cover" />
                      <div class="bg-[#002f61] text-white p-3 text-sm font-semibold"><span>FOR LEASE</span></div>
                      <div class="p-4 flex-grow flex flex-col">
                        <h4 class="text-sm text-[#002f61] font-bold uppercase">Guzape, Abuja</h4>
                        <h2 class="text-xl font-bold text-[#002f61] mb-2">Sudane Apartments</h2>
                        <p class="text-gray-600 mt-[5rem] mb-6">₦3,000,000 per week</p>
                        <div class="mt-auto space-y-3">
                          <p><a href="contact-us"><button
                            class="w-full bg-[#c9271b] hover-bg-brand-blue duration-200 text-white py-2 font-semibold transition ">Book
                            Inspection</button></a></p>
                            <p><a href="contact-us"><button
                            class="w-full bg-[#c9271b] hover-bg-brand-blue duration-200 text-white py-2 font-semibold transition ">Apply
                            Now</button></a></p></div>
                      </div>
                    </div>


                    <!-- Card 2 & 3 would repeat here -->
                    <div class="border rounded-md overflow-hidden shadow-lg flex flex-col"><img
                        src="images/lease2.jpg" alt="House for Lease"
                        class="w-full h-64 object-cover" />
                      <div class="bg-[#002f61] text-white p-3 text-sm font-semibold"><span>FOR LEASE</span></div>
                      <div class="p-4 flex-grow flex flex-col">
                        <h4 class="text-sm text-[#002f61] font-bold uppercase">Port Harcout, Rivers</h4>
                        <h2 class="text-xl font-bold text-[#002f61] mb-2">Ace Premier Apartments</h2>
                        <p class="text-gray-600 mt-[5rem] mb-6">₦1,500,000 per week</p>
                        <div class="mt-auto space-y-3">
                          <p><a href="contact-us"><button
                            class="w-full bg-[#c9271b] hover-bg-brand-blue duration-200 text-white py-2 font-semibold transition ">Book
                            Inspection</button></a></p>
                            <p><a href="contact-us"><button
                            class="w-full bg-[#c9271b] hover-bg-brand-blue duration-200 text-white py-2 font-semibold transition ">Apply
                            Now</button></a></p></div>
                      </div>
                    </div>

                    <div class="border rounded-md overflow-hidden shadow-lg flex flex-col"><img
                        src="images/lease3.jpg" alt="House for Lease"
                        class="w-full h-64 object-cover" />
                      <div class="bg-[#002f61] text-white p-3 text-sm font-semibold"><span>FOR LEASE</span></div>
                      <div class="p-4 flex-grow flex flex-col">
                        <h4 class="text-sm text-[#002f61] font-bold uppercase">Ikoyi, Lagos</h4>
                        <h2 class="text-xl font-bold text-[#002f61] mb-2">MJ Apartments</h2>
                        <p class="text-gray-600 mt-[5rem] mb-6">₦3,500,000 per week</p>  
                        <div class="mt-auto space-y-3">
                          <p><a href="contact-us"><button
                            class="w-full bg-[#c9271b] hover-bg-brand-blue duration-200 text-white py-2 font-semibold transition ">Book
                            Inspection</button></a></p>
                            <p><a href="contact-us"><button
                            class="w-full bg-[#c9271b] hover-bg-brand-blue duration-200 text-white py-2 font-semibold transition ">Apply
                            Now</button></a></p></div>
                      </div>
                    </div>
                  </div>

                  <!-- FOR SALE CARDS (Hidden by default) -->
                  <div id="for-sale-cards" class="property-card-grid hidden  overflow-hidden  flex flex-wrap justify-evenly">
                    <div class="border rounded-md overflow-hidden shadow-lg flex flex-col"><img
                        src="images/sale1.png" alt="House for Sale"
                        class="w-full h-64 object-cover" />
                      <div class="bg-[#002f61] text-white p-3 text-sm font-semibold"><span>FOR SALE</span></div>
                      <div class="p-4 flex-grow flex flex-col">
                        <h4 class="text-sm text-[#002f61] font-bold uppercase">Asokoro, Abuja</h4>
                        <h2 class="text-xl font-bold text-[#002f61] mb-2">Hotel (58 Rooms)</h2>
                        <!-- <p class="text-gray-600 mt-1 mb-6">Contact Agent</p> -->
                        <div class="mt-auto space-y-3">
                          <h1 class="mt-[5rem]">Listed Recently</h1>
                        </div>
                      </div>
                    </div>

                    <div class="border rounded-md overflow-hidden shadow-lg flex flex-col"><img
                        src="images/sale2.png" alt="House for Sale"
                        class="w-full h-64 object-cover" />
                      <div class="bg-[#002f61] text-white p-3 text-sm font-semibold"><span>FOR SALE</span></div>
                      <div class="p-4 flex-grow flex flex-col">
                        <h4 class="text-sm text-[#002f61] font-bold uppercase">Jabi, Abuja</h4>
                        <h2 class="text-xl font-bold text-[#002f61] mb-2">Apartment (5 Rooms)</h2>
                        <!-- <p class="text-gray-600 mt-1 mb-6">Contact Agent</p> -->
                        <div class="mt-auto space-y-3">
                          <h1 class="mt-[5rem]">Listed Recently</h1>
                        </div>
                      </div>
                    </div>

                     <div class="border rounded-md overflow-hidden shadow-lg flex flex-col"><img
                        src="images/sale3.png" alt="House for Sale"
                        class="w-full h-64 object-cover" />
                      <div class="bg-[#002f61] text-white p-3 text-sm font-semibold"><span>FOR SALE</span></div>
                      <div class="p-4 flex-grow flex flex-col">
                        <h4 class="text-sm text-[#002f61] font-bold uppercase">Ikeja, Lagos</h4>
                        <h2 class="text-xl font-bold text-[#002f61] mb-2">Hotel (32 Rooms)</h2>
                        <!-- <p class="text-gray-600 mt-1 mb-6">Contact Agent</p> -->
                        <div class="mt-auto space-y-3">
                          <h1 class="mt-[5rem]">Listed Recently</h1>
                        </div>
                      </div>
                    </div>
                  </div>



                  <!-- RECENT SALES CARDS (Hidden by default) -->
                   <div id="recent-sales-cards" class="property-card-grid hidden  overflow-hidden  flex flex-wrap justify-evenly">
                    <div class="border rounded-md overflow-hidden shadow-lg flex flex-col"><img
                        src="images/r1.jpg" alt="House for Sale"
                        class="w-full h-64 object-cover" />
                      <div class="bg-[#002f61] text-white p-3 text-sm font-semibold"><span>Sold</span></div>
                      <div class="p-4 flex-grow flex flex-col">
                        <h4 class="text-sm text-[#002f61] font-bold uppercase">Abuja</h4>
                        <h2 class="text-xl font-bold text-[#002f61] mb-2">Hotel (12 Rooms)</h2>
                        <!-- <p class="text-gray-600 mt-1 mb-6">Contact Agent</p> -->
                        <div class="mt-auto space-y-3">
                          <h1 class="mt-[5rem]">₦128,150,000</h1>
                        </div>
                      </div>
                    </div>

                      <div class="border rounded-md overflow-hidden shadow-lg flex flex-col"><img
                          src="images/r2.jpg" alt="House for Sale"
                          class="w-full h-64 object-cover" />
                        <div class="bg-[#002f61] text-white p-3 text-sm font-semibold"><span>sold</span></div>
                        <div class="p-4 flex-grow flex flex-col">
                          <h4 class="text-sm text-[#002f61] font-bold uppercase">Lagos </h4>
                          <h2 class="text-xl font-bold text-[#002f61] mb-2">Hotel (28 Rooms)</h2>
                          <!-- <p class="text-gray-600 mt-1 mb-6">Contact Agent</p> -->
                          <div class="mt-auto space-y-3">
                            <h1 class="mt-[5rem]">₦321,891,000</h1>
                          </div>
                        </div>
                      </div>

                      <div class="border rounded-md overflow-hidden shadow-lg flex flex-col"><img
                          src="images/r3.jpg" alt="House for Sale"
                          class="w-full h-64 object-cover" />
                        <div class="bg-[#002f61] text-white p-3 text-sm font-semibold"><span>Sold</span></div>
                        <div class="p-4 flex-grow flex flex-col">
                          <h4 class="text-sm text-[#002f61] font-bold uppercase">Abuja </h4>
                          <h2 class="text-xl font-bold text-[#002f61] mb-2">Office Apartment (7 Rooms)</h2>
                          <!-- <p class="text-gray-600 mt-1 mb-6">Contact Agent</p> -->
                          <div class="mt-auto space-y-3">
                            <h1 class="mt-[5rem]">₦78,050,000</h1>
                          </div>
                        </div>
                      </div>
                  </div>


                  <!-- RECENT LEASES CARDS (Hidden by default) -->
                   <div id="recent-leases-cards" class="property-card-grid hidden  overflow-hidden  flex flex-wrap justify-evenly">
                    <div class="border rounded-md overflow-hidden shadow-lg flex flex-col"><img
                        src="images/l1.jpg" alt="House for Sale"
                        class="w-full h-64 object-cover" />
                      <div class="bg-[#002f61] text-white p-3 text-sm font-semibold"><span>Leased</span></div>
                      <div class="p-4 flex-grow flex flex-col">
                        <h4 class="text-sm text-[#002f61] font-bold uppercase">Abuja </h4>
                        <h2 class="text-xl font-bold text-[#002f61] mb-2">Office Apartment (5 Rooms) </h2>
                        <!-- <p class="text-gray-600 mt-1 mb-6">Contact Agent</p> -->
                        <div class="mt-auto space-y-3">
                          <h1 class="mt-[3rem]"></h1>
                        </div>
                      </div>
                    </div>

                    <div class="border rounded-md overflow-hidden shadow-lg flex flex-col"><img
                        src="images/l2.jpg" alt="House for Sale"
                        class="w-full h-64 object-cover" />
                      <div class="bg-[#002f61] text-white p-3 text-sm font-semibold"><span>Leased</span></div>
                      <div class="p-4 flex-grow flex flex-col">
                        <h4 class="text-sm text-[#002f61] font-bold uppercase">Rivers</h4>
                        <h2 class="text-xl font-bold text-[#002f61] mb-2">Apartment (4 Rooms)	</h2>
                        <!-- <p class="text-gray-600 mt-1 mb-6">Contact Agent</p> -->
                        <div class="mt-auto space-y-3">
                          <h1 class="mt-[3rem]"></h1>
                        </div>
                      </div>
                    </div>

                     <div class="border rounded-md overflow-hidden shadow-lg flex flex-col"><img
                        src="images/l3.jpg" alt="House for Sale"
                        class="w-full h-64 object-cover" />
                      <div class="bg-[#002f61] text-white p-3 text-sm font-semibold"><span>Leased</span></div>
                      <div class="p-4 flex-grow flex flex-col">
                        <h4 class="text-sm text-[#002f61] font-bold uppercase">Rivers</h4>
                        <h2 class="text-xl font-bold text-[#002f61] mb-2">Apartment (6 Rooms)</h2>
                        <!-- <p class="text-gray-600 mt-1 mb-6">Contact Agent</p> -->
                        <div class="mt-auto space-y-3">
                          <h1 class="mt-[3rem]"></h1>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <!-- View All Button -->
                <div class="text-center" style="display: none;">
                  <a id="view-all-link" href="">
                    <button
                      class="flex items-center gap-2 bg-[#819db6] text-white px-6 py-3 my-[5rem] mx-auto rounded-lg hover:text-[rgb(228,130,58)] shadow-2xl duration-200 hover:bg-white hover:ring-1 hover:ring-gray-200 transition">
                      <span>View All</span>
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </button>
                  </a>
                </div>
              </div>
            </section>
          </main>


        </div>

        <script>
          document.addEventListener('DOMContentLoaded', function () {
            const filterButtons = document.querySelectorAll('.property-filter-btn');
            const cardGrids = document.querySelectorAll('.property-card-grid');
            const viewAllLink = document.getElementById('view-all-link');

            // --- Function to handle filter logic ---
            function switchTab(targetId) {
              // Hide all card grids
              cardGrids.forEach(grid => {
                grid.classList.add('hidden');
              });

              // Show the target card grid
              const targetGrid = document.getElementById(targetId + '-cards');
              if (targetGrid) {
                targetGrid.classList.remove('hidden');
              }

              // Update the "View All" button link
              if (viewAllLink) {
                viewAllLink.href = `/${targetId}`;
              }

              // Update active state for buttons
              filterButtons.forEach(button => {
                const buttonSpan = button.querySelector('span');
                if (button.dataset.target === targetId) {
                  // Add active styles
                  button.classList.add('active');
                  buttonSpan.classList.remove('text-gray-400');
                  buttonSpan.classList.add('text-[#002f61]', 'font-bold');
                } else {
                  // Remove active styles
                  button.classList.remove('active');
                  buttonSpan.classList.add('text-gray-400');
                  buttonSpan.classList.remove('text-[#002f61]', 'font-bold');
                }
              });
            }

            // --- Add click event listeners to filter buttons ---
            filterButtons.forEach(button => {
              button.addEventListener('click', () => {
                const targetId = button.dataset.target;
                switchTab(targetId);
              });
            });

            // --- Set initial active tab ---
            // We find the button that has the 'active' class in the HTML and trigger the logic for it.
            const initialActiveButton = document.querySelector('.property-filter-btn.active');
            if (initialActiveButton) {
              switchTab(initialActiveButton.dataset.target);
            } else {
              // Fallback to the first button if none are marked active
              switchTab('for-sale');
            }
          });
        </script>




        <div class="relative lg:flex justify-evenly bg-white py-10">
          <!-- Quote Icon and Heading -->
          <div>
            <img class="h-[12rem]  mr-[25rem]"
              src="data:image/svg+xml,%3Csvg width='350' height='267' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M167.456-67.727C75.356-67.727 0 7.63 0 99.73v167.456h167.456V99.73H55.819c0-61.96 49.679-111.638 111.637-111.638v-55.819zm181.598 0c-92.101 0-167.457 75.356-167.457 167.457v167.456h167.457V99.73H237.416c0-61.96 49.679-111.638 111.638-111.638v-55.819z' fill='url(%23paint0_linear)' fill-opacity='.3'/%3E%3Cdefs%3E%3ClinearGradient id='paint0_linear' x1='195.366' y1='-67.727' x2='195.366' y2='250.068' gradientUnits='userSpaceOnUse'%3E%3Cstop stop-color='%23002f61' stop-opacity='1'/%3E%3Cstop offset='1' stop-color='%23002f61' stop-opacity='0'/%3E%3C/linearGradient%3E%3C/defs%3E%3C/svg%3E"
              alt="">
            <h1 class="text-3xl ml-8 font-bold mb-12 text-[#002f61]">Testimonials</h1>
          </div>

          <!-- Testimonial Cards with Scroll -->
          <div class="relative bg-[#002f61] overflow-hidden py-[5rem] ">
            <!-- Cards Container -->
            <div id="testimonialContainer" class="flex gap-4 overflow-hidden scroll-smooth no-scrollbar">


              <!-- Testimonial Card -->
              <!-- Card 1 -->
              <div class="bg-white shadow-lg p-10  h-[400px] w-[400px] flex-shrink-0">
                
                <p class="text-sm  mt-2 max-h-70 overflow-y-auto">
                Buying my first home felt overwhelming until I found Gaitanoe Properties. From the first consultation to the final paperwork, they walked me through everything with such patience and professionalism. They didn't just try to sell me a house—they made sure it was the right one for my lifestyle and budget. I'm so grateful to the team for turning what could have been a stressful experience into something exciting and seamless.
                </p>
                <h4 class="text-xl font-bold text-[#002f61] mt-4">Chika O.</h4>
              </div>

              <!-- Card 2 -->
              <div class="bg-white shadow-lg p-10  h-[400px] w-[400px] flex-shrink-0">
                <p class="text-sm  mt-2 max-h-70 overflow-y-auto">
                  I had heard too many horror stories about buying land in Lagos, so I was cautious. But Gaitanoe Properties changed my perception completely. They took the time to explain the legal processes, verified all documentation, and ensured I was fully protected. What stood out was how transparent and patient they were throughout. Today, I'm a proud landowner with full peace of mind—all thanks to their integrity and expertise.
                </p>
                <h4 class="text-xl font-bold text-[#002f61] mt-4">Tunde A.</h4>
              </div>

              <!-- Card 3 -->
              <div class="bg-white shadow-lg p-10  h-[400px] w-[400px] flex-shrink-0">
              <p class="text-sm  mt-2 max-h-70 overflow-y-auto">
              As a young professional moving to Abuja for work, I didn't know where to start with house hunting. Gaitanoe Properties listened to what I wanted, respected my budget, and found me a beautiful, secure apartment in just a few days. I didn't have to stress about landlords or fake agents—they handled everything professionally. I'd recommend them to anyone looking for honest, efficient property services.
                </p>
                <h4 class="text-xl font-bold text-[#002f61] mt-4">Jane M.</h4>
              </div>

              <!-- Card 4 -->
              <div class="bg-white shadow-lg p-10  h-[400px] w-[400px] flex-shrink-0">
              <p class="text-sm  mt-2 max-h-70 overflow-y-auto">
              Working with Gaitanoe Properties as an investor has been one of the smartest business decisions I've made. They're not just in real estate—they understand the market and offer real insight. From land banking to off-plan developments, they've helped me grow my portfolio with solid, well-researched opportunities. I never feel pressured; they always put the client first.
                </p>
                <h4 class="text-xl font-bold text-[#002f61] mt-4">Dr. Ernest M.</h4>
              </div>

              <!-- Card 5 -->
              <div class="bg-white shadow-lg p-10  h-[400px] w-[400px] flex-shrink-0">
              <p class="text-sm  mt-2 max-h-70 overflow-y-auto">
              I had been trying to sell my property for over a year with no success. But after listing it with Gaitanoe Properties, they found a serious buyer within a month. What impressed me most was their clear communication, professional marketing, and negotiation skills. I didn't have to chase them—they followed up consistently and closed the deal smoothly. Truly a breath of fresh air in this industry.
                </p>
                <h4 class="text-xl font-bold text-[#002f61] mt-4">Olatunji B.</h4>
              </div>

              <!-- Card 6 -->
              <div class="bg-white shadow-lg p-10  h-[400px] w-[400px] flex-shrink-0">
              <p class="text-sm  mt-2 max-h-70 overflow-y-auto">
              As a business owner relocating to a new city, I needed more than just a commercial space—I needed guidance. Gaitanoe Properties delivered that and more. Their team understood my business needs, helped me evaluate different areas, and eventually found the perfect location that balanced cost, accessibility, and visibility. Their strategic advice helped me avoid costly mistakes.
                </p>
                <h4 class="text-xl font-bold text-[#002f61] mt-4">David U.</h4>
              </div>

              <!-- Card 7 -->
              <div class="bg-white shadow-lg p-10  h-[400px] w-[400px] flex-shrink-0">
              <p class="text-sm  mt-2 max-h-70 overflow-y-auto">
              Living in the UK, I was hesitant about investing in property back home in Nigeria because of the many risks involved. But working with Gaitanoe Properties gave me total confidence. They provided video tours, transparent updates, and legal assistance throughout the process. I didn't have to fly in once—they handled everything professionally, and today I'm a proud landowner. I'm already planning my next investment with them.
                </p>
                <h4 class="text-xl font-bold text-[#002f61] mt-4">Ade E.</h4>
              </div>

             

              <!-- Duplicate or unique more cards below -->
              <!-- ... (Card 2, 3, 4 etc.) -->

            </div>

            <!-- Scroll Arrows -->
            <div class="flex mt-10 px-10 gap-6">
              <button onclick="scrollTestimonials('left')"
                class="text-4xl text-white hover:text-gray-300 transition">&#8592;</button>
              <button onclick="scrollTestimonials('right')"
                class="text-4xl text-white hover:text-gray-300 transition">&#8594;</button>

            </div>
          </div>

          <script>
            const container = document.getElementById('testimonialContainer');
            const scrollAmount = 420;

            function scrollTestimonials(direction) {
              container.scrollBy({
                left: direction === 'left' ? -scrollAmount : scrollAmount,
                behavior: 'smooth'
              });
            }

            // Auto-scroll every 5 seconds
            setInterval(() => {
              const maxScrollLeft = container.scrollWidth - container.clientWidth;

              // If we're at or near the end, scroll back to the start
              if (container.scrollLeft + scrollAmount >= maxScrollLeft) {
                container.scrollTo({ left: 0, behavior: 'smooth' });
              } else {
                scrollTestimonials('right');
              }
            }, 5000);
          </script>





        </div>


        <h1 class="text-5xl text-center ml-8 font-bold mb-12 text-[#002f61]">Our Executive Team</h1>

        <div
          class="relative bg-white w-full lg:w-[80rem] flex justify-center items-center mx-auto py-10 overflow-hidden">
          <!-- Carousel Container -->
          <div id="teamCarousel" class="flex justify-evenly  mx-[8rem] overflow-hidden scroll-smooth no-scrollbar ">

            <!-- Card Example -->
            <div class="flex-shrink-0 text-center w-52">
              <img src="images/team1.png" class="w-36 h-36 rounded-full mx-auto" alt="">
              <h3 class="mt-4 text-[#002f61] font-bold">Aneke Cajetan</h3>
              <p class="text-sm text-gray-600">Chief Executive Officer (CEO)</p>
            </div>

            <div class="flex-shrink-0 text-center w-52">
              <img src="images/team3.png" class="w-36 h-36 rounded-full mx-auto" alt="">
              <h3 class="mt-4 text-[#002f61] font-bold">Adeyemi Benjamin</h3>
              <p class="text-sm text-gray-600">Chief Operating Officer (COO)</p>
            </div>

            <div class="flex-shrink-0 text-center w-52">
              <img src="images/team4.png" class="w-36 h-36 rounded-full mx-auto" alt="">
              <h3 class="mt-4 text-[#002f61] font-bold">Amina Balogun</h3>
              <p class="text-sm text-gray-600">Chief Financial Officer (CFO)</p>
            </div>

            <div class="flex-shrink-0 text-center w-52">
              <img src="images/team5.png" class="w-36 h-36 rounded-full mx-auto" alt="">
              <h3 class="mt-4 text-[#002f61] font-bold">Ifeoma Nwachukwu</h3>
              <p class="text-sm text-gray-600">Head of Sales & Business Development</p>
            </div>

            <div class="flex-shrink-0 text-center w-52">
              <img src="images/team6.png" class="w-36 h-36 rounded-full mx-auto" alt="">
              <h3 class="mt-4 text-[#002f61] font-bold">Sola Adeyemi</h3>
              <p class="text-sm text-gray-600">Head of Property Management</p>
            </div>

            <div class="flex-shrink-0 text-center w-52">
              <img src="images/team2.png" class="w-36 h-36 rounded-full mx-auto" alt="">
              <h3 class="mt-4 text-[#002f61] font-bold">Benson Efosa</h3>
              <p class="text-sm text-gray-600">Legal & Compliance Director</p>
            </div>

            <div class="flex-shrink-0 text-center w-52">
              <img src="images/team7.png" class="w-36 h-36 rounded-full mx-auto" alt="">
              <h3 class="mt-4 text-[#002f61] font-bold">Clement Abasi</h3>
              <p class="text-sm text-gray-600">Head of Marketing & Communications</p>
            </div>

            <!-- Add more cards as needed -->
          </div>

          <!-- Arrows -->
          <div class="absolute left-2 top-1/2 transform -translate-y-1/2 ">
            <button id="prevBtn" class="bg-orange-500 h-[4rem]  w-[4rem] text-white p- rounded-full text-2xl">
              &#8592;
            </button>
          </div>
          <div class="absolute right-2 top-1/2 transform -translate-y-1/2">
            <button id="nextBtn" class="bg-orange-500 text-white h-[4rem] w-[4rem] p- rounded-full text-2xl">
              &#8594;
            </button>
          </div>
        </div>

        <script>
          document.addEventListener('DOMContentLoaded', () => {
            const carousel = document.getElementById('teamCarousel');
            const scrollAmount = 300;
            let isAutoScrolling = true;

            // Duplicate content for seamless looping
            const clone = carousel.innerHTML;
            carousel.innerHTML += clone;

            const scrollTeam = (direction) => {
              if (direction === 'right') {
                carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
              } else {
                carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
              }
            };

            document.getElementById('prevBtn').addEventListener('click', () => {
              isAutoScrolling = false;
              scrollTeam('left');
            });
            document.getElementById('nextBtn').addEventListener('click', () => {
              isAutoScrolling = false;
              scrollTeam('right');
            });

            // Auto-scroll loop
            setInterval(() => {
              if (!isAutoScrolling) return;

              scrollTeam('right');

              // Reset to start without animation when near the end
              if (carousel.scrollLeft >= carousel.scrollWidth / 2) {
                carousel.scrollLeft = 0; // jump to start silently
              }
            }, 3000);
          });
        </script>






<!-- success story start -->

<!-- success story end -->


<?php include('includes/banner.php'); ?>

<?php include('includes/footer.php'); ?>



      </div>




      <script>
        document.addEventListener('DOMContentLoaded', function () {
          const mobileMenuButton = document.getElementById('mobile-menu-button');
          const mobileMenu = document.getElementById('mobile-menu');
          const desktopMenu = document.querySelector('.hidden.lg\\:flex.items-center');

          // --- Mobile Menu Toggle ---
          mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
          });

          // --- Populate Mobile Menu from Desktop Menu ---
          const mobileMenuContainer = mobileMenu.querySelector('.space-y-1');
          if (desktopMenu && mobileMenuContainer) {
            // Clear any existing items
            mobileMenuContainer.innerHTML = '';

            // Clone desktop menu items for mobile
            const menuItems = desktopMenu.children;
            for (const item of menuItems) {
              if (item.classList.contains('group')) { // It's a dropdown
                const button = item.querySelector('button');
                const links = item.querySelectorAll('a');

                const dropdownContainer = document.createElement('div');
                const mainButton = document.createElement('button');
                mainButton.textContent = button.textContent;
                mainButton.className = 'w-full text-left block px-3 py-2 rounded-md text-base font-medium text-white hover-bg-brand hover-text-brand';

                const subMenu = document.createElement('div');
                subMenu.className = 'hidden pl-4 mt-1 space-y-1';

                links.forEach(link => {
                  const subLink = document.createElement('a');
                  subLink.href = link.href;
                  subLink.textContent = link.textContent;
                  subLink.className = 'block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover-bg-brand hover-text-brand';
                  subMenu.appendChild(subLink);
                });

                mainButton.addEventListener('click', () => {
                  subMenu.classList.toggle('hidden');
                });

                dropdownContainer.appendChild(mainButton);
                dropdownContainer.appendChild(subMenu);
                mobileMenuContainer.appendChild(dropdownContainer);

              } else if (item.tagName === 'A') { // It's a simple link
                const link = item.cloneNode(true);
                link.className = 'block px-3 py-2 rounded-md text-base font-medium text-white hover-bg-brand hover-text-brand';
                mobileMenuContainer.appendChild(link);
              }
            }
            // Add search icon to mobile menu
            const searchIcon = document.querySelector('.hidden.lg\\:block button').cloneNode(true);
            const searchLink = document.createElement('a');
            searchLink.href = '#';
            searchLink.className = 'flex items-center gap-2 px-3 py-2 rounded-md text-base font-medium text-white hover-bg-brand hover-text-brand';
            searchLink.innerHTML = searchIcon.innerHTML + '<span>Search</span>';
            mobileMenuContainer.appendChild(searchLink);
          }
        });
      </script>

</body>

</html>




<!-- #002f6 blue color -->
<!-- rgb(201, 39, 26) orange color -->