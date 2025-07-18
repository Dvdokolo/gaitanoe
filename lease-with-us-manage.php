<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lease With Us</title>

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
    <div id="app" class="min-h-screen flex flex-col bg-black/10">
      
     
     
     
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


  
        <div class="relative w-full h-[700px] overflow-hidden">
          <!-- Background image -->
          <img src="images/rentimg.webp" alt="Background" class="w-full h-full object-cover">

          <!-- Dark overlay with opacity -->
          <div class="absolute inset-0 bg-black/50 flex flex-col justify-center p-8 md:p-16">
            <!-- Content container -->
            <div class="text-white">
              <h1 class="text-4xl md:text-5xl font-bold mb-4 text-center ">
                Lease With Us
              </h1>

          
              </div>
            </div>
          </div>
        
<div class="mx-5 lg:mx-[5rem] mb-[3rem] p-5 lg:p-[2rem] ">
<p class="">
  The primary focus of the specialist Gaitanoe Property Management team is to ensure your asset maintains, and ideally grows, in value whilst always generating the maximum possible reliable return.
</p>
<br>
<p class="">
 The primary role of the specialist Gaitanoe Property Management team is to handle the communication, logistics and administration required to satisfy the needs of tenants and the security of landlords.

</p>
<br>
<p class="">
 Gaitanoe understands that property is about people.  We never lose sight of the fact that each property we manage represents a key investment for our landlords and a home for our tenants.


</p>
</div>



<div>

  <!-- 1 -->
<div class="lg:flex  justify-evenly">

  <img src="images/1.webp" class="mx-auto" alt="">
  <br>
  <p class="md:w-[40rem] lg:mx-0 mx-auto px-[1rem]">
   <span class="font-bold"> Property Presentation</span><br>
Ensure cleaning/maintenance issues are resolved and the property is at its best for photography and inspection
  </p>

</div>

<br>
<br>


  <!-- 2 -->
<div class="lg:flex justify-evenly">
  <p class="md:w-[40rem] lg:mx-0 mx-auto px-[1rem]">
   <span class="font-bold"> Marketing Foundations</span><br>
Photography, Copy and Floorplans
  </p>
  <br>
    <img src="images/2.webp" alt="">

</div>

<br>
<br>


  <!-- 3 -->
<div class="lg:flex  justify-evenly">

  <img src="images/web.jpg" style="max-width: 600px;" class="mx-auto" alt="">
  <br>
  <p class="md:w-[40rem] lg:mx-0 mx-auto px-[1rem]">
   <span class="font-bold">Internet</span><br>
Premium listings on top real estate websites in Nigeria.
  </p>

</div>

<br>
<br>






</div>


<!-- search -->
<?php include('includes/banner.php'); ?>


</div>





<?php include('includes/footer.php'); ?>



</div>
  </div>
</body>
</html>
