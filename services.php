<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>
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


  
        <div class="relative w-full h-[500px] overflow-hidden">
          <!-- Background image -->
          <img src="images/Services.webp" alt="Background" class="w-full h-full object-cover">

          <!-- Dark overlay with opacity -->
          <div class="absolute inset-0 bg-black/50 flex flex-col justify-center p-8 md:p-16">
            <!-- Content container -->
            <div class="text-white">
              <h1 class="text-4xl md:text-5xl font-bold mb-4 text-center ">
          
Services
              </h1>

          
              </div>
            </div>
          </div>
        
<br>
<br>
<br>



<div class="lg:px-[5rem] px-[1rem]">



<h4 class="mt-[5rem]">At Gaitanoe Properties, we offer a full range of real estate services designed to meet the needs of homeowners, investors, renters, and developers. Our goal is simple: to make real estate easier, safer, and more rewarding for you.</h4>



<h3 class="mt-4">🏡 Property Sales</h3>

<p>We help individuals and organizations buy and sell genuine residential and commercial properties across Nigeria. From initial listing to final documentation, we manage the entire sales process with professionalism and transparency.</p>



<h3 class="mt-4">🧱 Land Acquisition</h3>

<p>Looking to buy land for personal or investment purposes? We verify all titles, conduct due diligence, and ensure you're purchasing only authentic, litigation-free land in prime and developing locations.</p>



<h3 class="mt-4">🏢 Rentals & Leasing</h3>

<p>Whether you're searching for a home, office, or shop space, our team will match you with the right rental property that fits your budget and lifestyle. Landlords also trust us to source reliable tenants and manage lease agreements.</p>



<h3 class="mt-4">📈 Real Estate Investment Advisory</h3>

<p>We guide local and diaspora clients on how to grow wealth through smart property investments. With insights into emerging markets, land banking, off-plan projects, and more, we help you make informed, profitable decisions.</p>


<h3 class="mt-4">🧾 Property Documentation & Verification</h3>

<p>Avoid the risk of fake or disputed properties. We assist with title search, documentation, and property verification—ensuring all transactions are legally sound and secure.</p>


<h3 class="mt-4">🏠 Property Management</h3>

<p>From rent collection and tenant management to maintenance and inspections, we provide professional management services for landlords and property investors who want hands-free peace of mind.</p>



</div>


<!-- search -->

<?php include('includes/banner.php'); ?>


</div>




<?php include('includes/footer.php'); ?>

</div>
  </div>
</body>
</html>
