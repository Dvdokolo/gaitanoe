<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recent Sales</title>
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
      <?php include('includes/header.php'); ?>

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




<div class="flex mt-[8rem] md:px-[5rem] mb-5 ">
 <h1 style="font-weight: bold; font-size:2rem">Recent Sales</h1>
              </div>



<div class=" bg-white p-[2rem] md:px-[5rem] ">
<h1 class="font-bold mb-[3rem]">
    3 properties found
</h1>

<div class="flex flex-wrap mb-[5rem] justify-evenly gap-y-10">

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


                  
</div>






<!-- footer  -->


<?php include('includes/footer.php'); ?>
</div>
  </div>
</body>
</html>
