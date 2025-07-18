<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Property Alert</title>
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

<div class="mt-[10rem]">

   <div class="max-w-3xl mx-auto px-4 py-12 text-center">
      <h1 class="text-3xl font-bold mb-2">Register For Property Alerts</h1>
      <p class="text-base mb-10">
        Already Registered?
        <a href="login" class="underline font-semibold" style="color:#c9271a">Click Here</a>
        to log into your account.
      </p>

      <!-- Error Message -->
      <div id="errorMessage" class="hidden bg-red-100 text-red-700 px-4 py-3 rounded mb-6 text-left">
        There was an error with your registration. Please contact support.
      </div>

      <form id="registerForm" class="flex flex-wrap gap-6 justify-between text-left">
        <div class="w-full sm:w-[48%]">
          <label class="block font-semibold mb-1" for="firstName">First Name</label>
          <input type="text" id="firstName" required class="w-full border border-gray-300 rounded px-3 py-2" />
        </div>

        <div class="w-full sm:w-[48%]">
          <label class="block font-semibold mb-1" for="lastName">Last Name</label>
          <input type="text" id="lastName" required class="w-full border border-gray-300 rounded px-3 py-2" />
        </div>

        <div class="w-full">
          <label class="block font-semibold mb-1" for="email">Email</label>
          <input type="email" id="email" required class="w-full border border-gray-300 rounded px-3 py-2" />
        </div>

        <div class="w-full sm:w-[48%]">
          <label class="block font-semibold mb-1" for="password">Password</label>
          <input type="password" id="password" required class="w-full border border-gray-300 rounded px-3 py-2" />
        </div>

        <div class="w-full sm:w-[48%]">
          <label class="block font-semibold mb-1" for="confirmPassword">Confirm Password</label>
          <input type="password" id="confirmPassword" required class="w-full border border-gray-300 rounded px-3 py-2" />
        </div>

        <div class="w-full text-center mt-4">
          <button type="submit" class="bg-[#7088a1] hover:bg-white hover:text-orange-500 duration-200 shadow-2xl text-white font-semibold py-2 px-6 rounded">
            Register
          </button>
        </div>
      </form>

      <p class="text-sm mt-10">
        Please note by submitting this form, you will receive marketing materials from Gaitanoe Apartments tailored to your property needs.
      </p>
    </div>

    <script>
      document.getElementById("registerForm").addEventListener("submit", function (e) {
        e.preventDefault(); // prevent actual submission
        const errorDiv = document.getElementById("errorMessage");
        errorDiv.classList.remove("hidden");
      });
    </script>


  
<!-- search -->

<?php include('includes/banner.php'); ?>

<?php include('includes/footer.php'); ?>


</div>
  </div>
</body>
</html>
