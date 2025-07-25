<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>recent-sales</title>
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

  <!-- Google Fonts: Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    /* Use the Inter font family */
    body {
      font-family: 'Inter', sans-serif;

    }

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
</head>

<body class="relative min-h-screen text-[#002f61] font-inter">

  <div class="h-screen ">
   
    <!-- App Container -->
    <div id="app" class="min-h-screen flex flex-col bg-black/10">
      <!-- <script>
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
                item.classList.remove('text-[#002f60]');
                item.classList.add('text-gray-800');
              });
              hr.classList.add('hidden');
              searchIcon.classList.remove('text-[#002f60]');
              searchIcon.classList.add('text-[#002f60]'); // Change to dark blue when scrolled
            } else {
              // Top of page state
              nav.classList.add('bg-transparent');
              nav.classList.remove('bg-white', 'shadow-md');
              logo.classList.remove('invert');
              menuItems.forEach(item => {
                item.classList.add('text-[#002f60]');
                item.classList.remove('text-gray-800');
              });
              hr.classList.remove('hidden');
              searchIcon.classList.add('text-[#002f60]');
              searchIcon.classList.remove('text-[#002f60]'); // Back to white at top
            }
          });
        });
      </script> -->
     
     
     
     
      <!-- Header -->
      
<header class="relative">
  <!-- Main Navigation -->
  <nav class="text-[#002f60] fixed z-50 w-full shadow-xl bg-white transition-all duration-500 ease-in-out">
    <div class="container mx-auto px-4 md:px-20">
      <div class="flex justify-between items-center">
        <!-- Logo -->
        <div>
          <a href="index">
            <img src="images/logo.png" alt="Logo" class="h-[100px] rounded-full p-2 w-auto">
          </a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center space-x-2">
          <!-- Dropdown Group -->
          <div class="group relative">
            <button class="px-4 py-8 hover-bg-brand hover-text-brand transition-all">Buy</button>
            <div class="group-hover:block hidden absolute top-full left-0 bg-black/60 backdrop-blur-sm py-6 z-50">
              <div class="w-52 space-y-1">
                <a href="properties-for-sale"class="block text-orange-500 bg-[#002f60] px-5 py-2">Properties for sale</a>
                <a href="this-week’s-opens" class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2">This week’s opens</a>
                <a href="this-week’s-opens"class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2">This week’s options</a>
                <a href="property-alert" class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2">Property Alert</a>
                <a href="recent-sales" class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2">Recent Sales</a>
              </div>
            </div>
          </div>

          
          <div class="group relative">
            <button class="px-4 py-8 hover-bg-brand hover-text-brand transition-all">Rent</button>
            <div class="group-hover:block hidden absolute top-full left-0 bg-black/60 backdrop-blur-sm py-6 z-50">
              <div class="w-52 space-y-1">
                <a href="properties-for-rent" class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2">Rental Properties</a>
                <a href="this-week’s-options-rent" class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2">This week’s options</a>
                <a href="recent-leases"class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2">Recent leases</a>
                <a href="properties-alert-rent"  class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2">Property Alert</a>
                <a href="tenant-information" class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2">Tenant Information</a>
              </div>
            </div>
          </div>
    <!-- Sell -->
                <div class="group relative">
                  <button class="px-4 py-8  hover-bg-brand hover-text-brand transition-all">Sell</button>
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
                  <button class="px-4 py-8 hover-bg-brand hover-text-brand transition-all">Manage</button>
                  <div class="group-hover:block hidden absolute top-full left-0 bg-black/60  backdrop-blur-sm py-6 z-50">
                    <div class="container mx-auto w-[12.5rem] space-y-1">
                      <a href="service-guarantee"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Service guarantee
                        </a>
                      <a href="lease-with-us-manage"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Lease with us
                        </a>
                      <a href="property-management-services"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">Property management services
                        </a>
                      <a href="free-appraisal-manage"
                        class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2 rounded transition-all leading-relaxed">
                        Free Appraisal</a>
                    </div>
                  </div>
                </div>

          <a href="services" class="px-4 py-8 hover-bg-brand hover-text-brand transition-all">Services</a>

          <div class="group relative">
            <button class="px-4 py-8 hover-bg-brand hover-text-brand transition-all">About Us</button>
            <div class="group-hover:block hidden absolute top-full left-0 bg-black/60 backdrop-blur-sm py-6 z-50">
              <div class="w-52 space-y-1">
                <a href="our-team" class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2">Our Team</a>
                <a href="rise-statement" class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2">Rise Statement</a>
              </div>
            </div>
          </div>

          <a href="contact-us" class="px-4 py-8 hover-bg-brand hover-text-brand transition-all">Contact Us</a>

        
        </div>

  <div class="hidden lg:block group relative">
            <button class="px-4 py-8 hover-bg-brand hover-text-brand transition-all">Login</button>
            <div class="group-hover:block hidden absolute top-full left-0 bg-black/60 backdrop-blur-sm py-6 z-50">
              <div class="w-52 space-y-1">
                <a href="Staff-portal" class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2">Staff Portal</a>
                <a href="tenant-portal" class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2">Tenants Portal</a>
                <a href="owner-portal" class="block text-gray-300 hover:text-orange-500 hover:bg-[#002f60] px-5 py-2">Owners Portal</a>
              </div>
            </div>
          </div>


        <!-- Mobile Menu Toggle -->
        <div class="lg:hidden">
          <button id="mobile-menu-button" class="p-4 text-[#002f60]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden lg:hidden bg-black/90 absolute w-full z-40 mt-24 text-white text-base">
    <div class="px-4 pt-2 pb-4 space-y-3">
      <!-- Reusable Dropdown Block -->
      <div>
        <button onclick="toggleSubmenu('buy-submenu')" class="w-full text-left py-2 px-4 hover:bg-[#002f60]">Buy</button>
        <div id="buy-submenu" class="hidden pl-6 space-y-1 text-sm">
          <a href="properties-for-sale" class="block py-1 hover:text-orange-500">Properties for sale</a>
          <a href="this-week’s-opens" class="block py-1 hover:text-orange-500">This week’s opens</a>
          <a href="this-week’s-opens" class="block py-1 hover:text-orange-500">This week’s options</a>
          <a href="property-alert" class="block py-1 hover:text-orange-500">Property Alert</a>
          <a href="recent-sales" class="block py-1 hover:text-orange-500">Recent Sales</a>
        </div>
      </div>

      <div>
        <button onclick="toggleSubmenu('rent-submenu')" class="w-full text-left py-2 px-4 hover:bg-[#002f60]">Rent</button>
        <div id="rent-submenu" class="hidden pl-6 space-y-1 text-sm">
          <a href="properties-for-rent" class="block py-1 hover:text-orange-500">Properties for rent</a>
          <a href="this-week’s-options-rent" class="block py-1 hover:text-orange-500">This week’s options</a>
          <a href="recent-leases" class="block py-1 hover:text-orange-500">Recent leases</a>
          <a href="properties-alert-rent" class="block py-1 hover:text-orange-500">Properties Alert</a>
          <a href="tenant-information" class="block py-1 hover:text-orange-500">Tenant Information</a>
        </div>
      </div>

      <div>
        <button onclick="toggleSubmenu('sell-submenu')" class="w-full text-left py-2 px-4 hover:bg-[#002f60]">Sell</button>
        <div id="sell-submenu" class="hidden pl-6 space-y-1 text-sm">
          <a href="sell-with-us" class="block py-1 hover:text-orange-500"> Sell with us</a>
          <a href="free-apraisal" class="block py-1 hover:text-orange-500">Free Apraisal</a>
          <a href="recent-sales" class="block py-1 hover:text-orange-500"> Recent Sales</a>
        </div>
      </div>

      <div>
        <button onclick="toggleSubmenu('manage-submenu')" class="w-full text-left py-2 px-4 hover:bg-[#002f60]">Manage</button>
        <div id="manage-submenu" class="hidden pl-6 space-y-1 text-sm">
          <a href="service-guarantee" class="block py-1 hover:text-orange-500">Service guarantee</a>
          <a href="lease-with-us-manage" class="block py-1 hover:text-orange-500">Lease with us</a>
          <a href="property-management-services" class="block py-1 hover:text-orange-500">Property management services</a>
          <a href="free-appraisal-manage" class="block py-1 hover:text-orange-500">Free Appraisal</a>
        </div>
      </div>

      <a href="services" class="block py-2 px-4 hover:bg-[#002f60]">Services</a>

      <div>
        <button onclick="toggleSubmenu('about-submenu')" class="w-full text-left py-2 px-4 hover:bg-[#002f60]">About Us</button>
        <div id="about-submenu" class="hidden pl-6 space-y-1 text-sm">
          <a href="our-team" class="block py-1 hover:text-orange-500">Our Team</a>
          <a href="rise-statement" class="block py-1 hover:text-orange-500">Rise Statement</a>
        </div>
      </div>

      <a href="contact-us" class="block py-2 px-4 hover:bg-[#002f60]">Contact Us</a>

      <div>
        <button onclick="toggleSubmenu('login-submenu')" class="w-full text-left py-2 px-4 hover:bg-[#002f60]">Login</button>
        <div id="login-submenu" class="hidden pl-6 space-y-1 text-sm">
          <a href="Staff-portal" class="block py-1 hover:text-orange-500">Staff Portal</a>
          <a href="tenant-portal" class="block py-1 hover:text-orange-500">Tenants Portal</a>
          <a href="owner-portal" class="block py-1 hover:text-orange-500">Owners Portal</a>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Toggle Script -->
<script>
  const mobileMenuBtn = document.getElementById("mobile-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");

  mobileMenuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });

  function toggleSubmenu(id) {
    const submenu = document.getElementById(id);
    submenu.classList.toggle("hidden");
  }
</script>




 <div class="flex justify-evenly mt-[8rem] px-[2rem] md:px-[5rem] ">
                <!-- Address search input -->
                <div class="relative mb-8">
                  <input type="text" placeholder="Search"
                    class="   h-[2.5rem] md:h-[4rem] md:p-4 p-2 px-4 md:px-6 w-full md:w-[40rem] lg:w-[75rem] rounded-xl text-gray-800">
                </div>

                <!-- CTA button -->
                <button
                  class="bg-orange-500 h-[2.5rem] md:h-[4rem] text-white text-[10px] md:font-bold md:p-4 p-2  md:px-6 rounded-xl hover:bg-gray-900 transition">
                  FIND OUT
                </button>
              </div>



<div class=" bg-white p-[2rem] md:px-[5rem] ">
<h1 class="font-bold mb-[3rem]">
    3 properties found
</h1>

<div class="flex flex-wrap mb-[5rem] justify-evenly gap-y-10">

    <!-- 1 -->
  <div class="border rounded-md overflow-hidden shadow-lg flex flex-col"><img
                        src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800" alt="House for Sale"
                        class="w-full h-64 object-cover" />
                      <div class="bg-[#002f61] text-white p-3 text-sm font-semibold"><span>SOLD</span></div>
                      <div class="p-4 flex-grow flex flex-col">
                        <h4 class="text-sm text-[#002f61] font-bold uppercase">Abuja</h4>
                        <h2 class="text-xl font-bold text-[#002f61] mb-2">Nordic Villa Abuja</h2>
                        <!-- <p class="text-gray-600 mt-1 mb-6">Contact Agent</p> -->
                        <div class="mt-auto space-y-3">
                          <h1 class="mt-[1rem]">N 2,150,000</h1>
                        </div>
                      </div>
                    </div>

<!-- 2 -->

        <div class="border rounded-md overflow-hidden shadow-lg flex flex-col"><img
                          src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800" alt="House for Sale"
                          class="w-full h-64 object-cover" />
                        <div class="bg-[#002f61] text-white p-3 text-sm font-semibold"><span>SOLD</span></div>
                        <div class="p-4 flex-grow flex flex-col">
                          <h4 class="text-sm text-[#002f61] font-bold uppercase">Abuja </h4>
                          <h2 class="text-xl font-bold text-[#002f61] mb-2">Ace Premier Hotel</h2>
                          <!-- <p class="text-gray-600 mt-1 mb-6">Contact Agent</p> -->
                          <div class="mt-auto space-y-3">
                            <h1 class="mt-[1rem]">N 891,000</h1>
                          </div>
                        </div>
                      </div>



                      <!-- 3 -->

                      <div class="border rounded-md overflow-hidden shadow-lg flex flex-col"><img
                          src="images/For Lease1.jpg" alt="House for Sale"
                          class="w-full h-64 object-cover" />
                        <div class="bg-[#002f61] text-white p-3 text-sm font-semibold"><span>SOLD</span></div>
                        <div class="p-4 flex-grow flex flex-col">
                          <h4 class="text-sm text-[#002f61] font-bold uppercase">Abuja </h4>
                          <h2 class="text-xl font-bold text-[#002f61] mb-2">Citilodge Hotel</h2>
                          <!-- <p class="text-gray-600 mt-1 mb-6">Contact Agent</p> -->
                          <div class="mt-auto space-y-3">
                            <h1 class="mt-[1rem]">N 3,050,000</h1>
                          </div>
                        </div>
                      </div>







</div>


                  
</div>






<!-- footer  -->


 <footer class="bg-[#e4e4e487]  pt-12 px-4 py-[4rem] md:px-8 lg:px-16">

          <div class="container mx-auto">
            <!-- Top Section -->
            <div class="flex flex-col lg:flex-row justify-between gap-8 mb-8">
              <!-- Contact Info -->
              <div class="lg:w-1/4">
                <img src="images/logo.png" class="h-28 mb-6 w-auto rounded-full" alt="Gaitanoe Logo">
                <p class="mb-2"><span class="font-semibold">T:</span> 1300 858 221</p>
                <p><span class="font-semibold">E:</span> info@Gaitanoe.com</p>
              </div>

              <!-- Main Links Grid -->
              <div class="lg:w-3/4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                  <!-- Buy Column -->
                  <div>
                    <h3 class="font-bold  mb-4">Buy</h3>
                    <ul class="space-y-2">
                      <li><a href="properties-for-sale"class="hover:text-blue-600 transition-colors">Properties For Sale</a></li>
                      <li><a href="this-week’s-opens" class="hover:text-blue-600 transition-colors">This Week's Opens</a></li>
                      <li><a href="this-week’s-opens" class="hover:text-blue-600 transition-colors">This Week's Auctions</a></li>
                      <li><a href="property-alert" class="hover:text-blue-600 transition-colors">Property Alert</a></li>
                      <li><a href="recent-sales" class="hover:text-blue-600 transition-colors">Recent Sales</a></li>
                    </ul>
                  </div>

                  <!-- Rent Column -->
                  <div>
                    <h3 class="font-bold  mb-4">Rent</h3>
                    <ul class="space-y-2">
                      <li><a href="properties-for-rent"  class="hover:text-blue-600 transition-colors">Properties For Rent</a></li>
                      <li><a href="this-week’s-options-rent"  class="hover:text-blue-600 transition-colors">This Week's Opens</a></li>
                      <li><a href="recent-leases" class="hover:text-blue-600 transition-colors">Recent Leases</a></li>
                      <li><a href="properties-alert-rent" class="hover:text-blue-600 transition-colors">Property Alert</a></li>
                      <li><a href="tenant-information"  class="hover:text-blue-600 transition-colors">Tenant Information</a></li>
                      <li><a href="tenant-portal" class="hover:text-blue-600 transition-colors">Tenants Portal</a></li>
                    </ul>
                  </div>

                  <!-- Sell Column -->
                  <div>
                    <h3 class="font-bold  mb-4">Sell</h3>
                    <ul class="space-y-2">
                     <li> <a href="sell-with-us"  class="hover:text-blue-600 transition-colors">Sell With Us</a></li>
                      <li><a href="#" class="hover:text-blue-600 transition-colors">Testimonials</a></li>
                      <li><a href="free-apraisal"  class="hover:text-blue-600 transition-colors">Free Appraisal</a></li>
                      <li><a href="recent-sales"  class="hover:text-blue-600 transition-colors">Recent Sales</a></li>
                      <li><a href="#" class="hover:text-blue-600 transition-colors">Success Stories</a></li>
                    </ul>
                  </div>

                  <!-- Manage Column -->
                  <div>
                    <h3 class="font-bold  mb-4">Manage</h3>
                    <ul class="space-y-2">
                      <li><a href="lease-with-us-manage" class="hover:text-blue-600 transition-colors">Lease With Us</a></li>
                      <li><a href="property-management-services" class="hover:text-blue-600 transition-colors">Property Management Services</a>
                      </li>
                      <li><a href="#" class="hover:text-blue-600 transition-colors">Testimonials</a></li>
                      <li><a href="free-appraisal-manage" class="hover:text-blue-600 transition-colors">Free Appraisal</a></li>
                      <li><a href="owner-portal" class="hover:text-blue-600 transition-colors">Owners Portal</a></li>
                    </ul>
                  </div>
                </div>

                <!-- Second Row - Resources and Appraisal -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mt-8">
                  <!-- Resources Section -->
                  <div>
                    <h3 class="font-bold  mb-4">Resources</h3>
                    <ul class="space-y-2">
                      <li><a href="#" class="hover:text-blue-600 transition-colors">News and Insights</a></li>
                      <li><a href="contact-us" class="hover:text-blue-600 transition-colors">Contact Us</a></li>
                    </ul>
                  </div>  
                 

                  <!-- Free Appraisal Section -->
                 
                </div>
              </div>
            </div>

            <!-- Divider -->
            <div class="footer-divider"></div>

            <!-- Copyright Section -->
            <div class="text-sm flex justify-center ">
              <p>Copyright © 2025 Gaitanoe. All rights reserved 
              </p>
            </div>
          </div>
        </footer>

</div>
  </div>
</body>
</html>
