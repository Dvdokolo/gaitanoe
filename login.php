<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>

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
      <h1 class="text-3xl font-bold mb-2">Member Login</h1>
      <p class="text-base mb-10">
      Need an account?
        <a href="property-alert" class="underline font-semibold" style="color:#c9271a">Register Here</a>
       
      </p>

      <!-- Error Message -->
      <div id="errorMessage" class="hidden bg-red-100 text-red-700 px-4 py-3 rounded mb-6 text-left">
        Invalid username or password
      </div>

      <form id="registerForm" class=" sm:w-[48%] mx-auto gap-6 justify-between text-left">
        <div class="w-full mx-auto">
          <label class="block font-semibold mb-1" for="firstName">Username</label>
          <input type="text" id="firstName" required class="w-full border border-gray-300 rounded px-3 py-2" />
        </div>
<br>
        <div class="w-full  mx-auto">
          <label class="block font-semibold mb-1" for="lastName">Password</label>
          <input type="password" id="lastName" required class="w-full border border-gray-300 rounded px-3 py-2" />
        </div>

      
       

              <div class="w-full  mt-4">
          <button type="submit" class="bg-[#7088a1] hover:bg-white hover:text-orange-500 duration-200 shadow-2xl text-white font-semibold py-2 px-6 rounded">
            Register
          </button>
        </div>
      </form>

<p class="mt-10 text-center">
    <a href="#" id="forgotPasswordLink" class=" underline font-semibold" style="color:#c9271a">Forgot Password?</a>
  </p>

  <!-- Modal Overlay -->
  <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-40 hidden justify-center m-auto items-center z-50">
    <!-- Modal Box -->
    <div class="bg-white mx-auto h-[15rem] mt-10rem md:mt-[15rem]  w-full max-w-md p-10 relative shadow-lg">
      <h2 class="text-xl font-bold mb-4">Forgot Password?</h2>

      <!-- Error Message -->
      <div id="errorMsg" class="hidden text-red-600 bg-red-100 p-2 rounded mb-3 text-sm">
        Invalid email address. Please enter a valid email.
      </div>

      <!-- Email Input -->
      <label for="emailInput" class="block text-left font-semibold mb-1">Email*</label>
      <input type="email" id="emailInput" placeholder=""
        class="w-full border border-gray-300 rounded px-3 py-2 mb-4"/>

      <!-- Send Button -->
        <button id="sendButton"class="bg-[#7088a1] hover:bg-white hover:text-orange-500 duration-200 shadow-2xl text-white font-semibold py-2 px-6 rounded">
             Send
          </button>
    
      <!-- Close Button -->
      <button id="closeModal" class="absolute top-2 right-3 text-gray-500 text-2xl leading-none hover:text-black">&times;</button>
    </div>
  </div>

  <!-- Script -->
  <script>
    const forgotLink = document.getElementById("forgotPasswordLink");
    const modalOverlay = document.getElementById("modalOverlay");
    const closeModal = document.getElementById("closeModal");
    const sendButton = document.getElementById("sendButton");
    const emailInput = document.getElementById("emailInput");
    const errorMsg = document.getElementById("errorMsg");

    forgotLink.addEventListener("click", () => {
      modalOverlay.classList.remove("hidden");
    });

    closeModal.addEventListener("click", () => {
      modalOverlay.classList.add("hidden");
      errorMsg.classList.add("hidden");
      emailInput.value = "";
    });

    sendButton.addEventListener("click", () => {
      const email = emailInput.value.trim();
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email)) {
        errorMsg.classList.remove("hidden");
      } else {
        errorMsg.classList.add("hidden");
        // Simulate sending (you can add backend call here)
        alert("Email not found!");
        modalOverlay.classList.add("hidden");
        emailInput.value = "";
      }
    });
  </script>
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
