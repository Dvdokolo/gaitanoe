<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Free Appraisal</title>

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
    <div id="app" class="min-h-screen flex flex-col bg-white">
      
     
     
     
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

<div class="mt-[6rem]">

   <div class="max-w-[75rem] mx-auto px-4 py-12 text-center">
      <h1 class="text-4xl font-bold mb-10">Free Appraisal</h1>
     
      <!-- Error Message -->
      <div id="errorMessage" class="hidden bg-red-100 text-red-700 px-4 py-3 rounded mb-6 text-left">
        Something went wrong. Please try again.
      </div>

      <form id="registerForm" class="flex flex-wrap gap-6 justify-between text-left">
        <div class="w-full ">
          
          <input type="text" id="firstName" required placeholder="Name*" class="w-full border border-gray-300  px-5 py-5" />
        </div>

        <div class="w-full ">
          
          <input type="text" required  placeholder="Address*" class="w-full border border-gray-300  px-5 py-5" />
        </div>

        <div class="w-full">
          
          <input type="email" required placeholder="Subject*" class="w-full border border-gray-300  px-5 py-5" />
        </div>

        <div class="w-full ">
          
          <input type="text" required id="email" placeholder="Email*" id="" class="w-full border border-gray-300  px-5 py-5" />
        </div>

        <div class="w-full ">
          
          <input type="number" required placeholder="Contact Number" id="" class="w-full border border-gray-300  px-5 py-5" />
        </div>

        <div class="space-x-6 mt-4">
  <!-- Sale Checkbox -->
  <label class="inline-flex items-center space-x-2">
    <input type="checkbox" name="sale" class="form-checkbox h-5 w-5 text-blue-600">
    <span class="text-[#0a2e52] font-medium">Sale</span>
  </label>

  <!-- Lease Checkbox -->
  <label class="inline-flex items-center space-x-2">
    <input type="checkbox" name="lease" class="form-checkbox h-5 w-5 text-blue-600">
    <span class="text-[#0a2e52] font-medium">Lease</span>
  </label>

    <p class="text-sm mt-10 space-x-0 text-left">
        Please note by submitting this form, you will receive marketing materials from Gaitanoe Properties tailored to your property needs.
      </p>

</div>


        <div class="w-full text-center  mt-4">
          <button type="submit" class="bg-orange-500 hover:bg-[#1a242f] hover:text-white duration-200 shadow-2xl text-white font-semibold py-3 px-8 ">
            SUBMIT
          </button>
        </div>
      </form>

    
    </div>

    <script>
      document.getElementById("registerForm").addEventListener("submit", function (e) {
        e.preventDefault(); // prevent actual submission
        const errorDiv = document.getElementById("errorMessage");
        errorDiv.classList.remove("hidden");
      });
    </script>




</div>









<?php include('includes/footer.php'); ?>
</div>
  </div>
</body>
</html>
