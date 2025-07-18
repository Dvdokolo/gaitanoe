<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Team</title>

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
    /* Use the Inter font family */
   

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

<div class="mt-[10rem]">

<h1 class="font-bold text-4xl text-center mb-10">
  Executive Team
</h1>

<h1 class="text-center">
  We are a group of dedicated property experts with the experience to make your property dreams come true.
<br>
<br>
Get in touch. We're here to help.
</h1>


<br>
<br>


<div class="flex flex-wrap px-[2rem] lg:px-[8rem] my-[5rem] gap-x-5 gap-y-5">
  
<!-- 1 -->
  <div class="shadow-2xl border-black pb-16 w-[18rem] mx-auto">
<img src="images/team1.png" class="rounded-full h-[15rem] mx-auto w-[15rem]" alt="">
<br>
<div class="px-10">
  <h1 class="text-center md-4 font-bold text-2xl">Aneke Cajetan</h1>
  <br>
<h1 class="text-center text-[12px] font-bold ">Chief Executive Officer (CEO)</h1>
</div>
  </div>



  
<!-- 2 -->
  <div class="shadow-2xl border-black pb-16 w-[18rem] mx-auto">
<img src="images/team3.png" class="rounded-full h-[15rem] mx-auto w-[15rem]" alt="">
<br>
<div class="px-10">
  <h1 class="text-center md-4 font-bold text-2xl">Adeyemi Benjamin</h1>
  <br>
<h1 class="text-center text-[12px] font-bold ">Chief Operating Officer (COO)</h1>
</div>
  </div>



  
<!-- 3 -->
  <div class="shadow-2xl border-black pb-16 w-[18rem] mx-auto">
<img src="images/team4.png" class="rounded-full h-[15rem] mx-auto w-[15rem]" alt="">
<br>
<div class="px-10">
  <h1 class="text-center md-4 font-bold text-2xl">Amina Balogun</h1>
  <br>
<h1 class="text-center text-[12px] font-bold ">Chief Financial Officer (CFO)</h1>
</div>
  </div>



  
<!-- 4x -->
  <div class="shadow-2xl border-black pb-16 w-[18rem] mx-auto">
<img src="images/team5.png" class="rounded-full h-[15rem] mx-auto w-[15rem]" alt="">
<br>
<div class="px-10">
  <h1 class="text-center md-4 font-bold text-2xl">Ifeoma Nwachukwu</h1>
  <br>
<h1 class="text-center text-[12px] font-bold ">Head of Sales & Business Development</h1>
</div>
  </div>


  <div class="shadow-2xl border-black pb-16 w-[18rem] mx-auto">
<img src="images/team6.png" class="rounded-full h-[15rem] mx-auto w-[15rem]" alt="">
<br>
<div class="px-10">
  <h1 class="text-center md-4 font-bold text-2xl">Sola Adeyemi</h1>
  <br>
<h1 class="text-center text-[12px] font-bold ">Head of Property Management</h1>
</div>
  </div>


  <div class="shadow-2xl border-black pb-16 w-[18rem] mx-auto">
<img src="images/team2.png" class="rounded-full h-[15rem] mx-auto w-[15rem]" alt="">
<br>
<div class="px-10">
  <h1 class="text-center md-4 font-bold text-2xl">Benson Efosa</h1>
  <br>
<h1 class="text-center text-[12px] font-bold ">Legal & Compliance Director</h1>
</div>
  </div>


  <div class="shadow-2xl border-black pb-16 w-[18rem] mx-auto">
<img src="images/team7.png" class="rounded-full h-[15rem] mx-auto w-[15rem]" alt="">
<br>
<div class="px-10">
  <h1 class="text-center md-4 font-bold text-2xl">Clement Abasi</h1>
  <br>
<h1 class="text-center text-[12px] font-bold ">Head of Marketing & Communications</h1>
</div>
  </div>




</div>


</div>






<?php include('includes/footer.php'); ?>


</div>
  </div>
</body>
</html>
