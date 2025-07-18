<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Guarantee</title>
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


        <div class="relative w-full h-[700px]  overflow-hidden">
          <!-- Background image -->
          <img src="images/expect to get more.jpg" alt="Background" class="w-full h-full object-cover">

          <!-- Dark overlay with opacity -->
          <div class="absolute inset-0 bg-black/50 flex flex-col justify-center p-8 md:p-16">
            <!-- Content container -->
            <div class="text-white">
              <h1 class="text-4xl md:text-5xl font-bold mb-4 text-center ">
                Expect to get more with Gaitanoe
              </h1>

              <p class="text-xl mb-6 text-center">
                Have a Question?
              </p>

              <form action="contact-us" method="POST">
              <div class="flex justify-center   ">
                <!-- Address search input -->
                <div class="relative mb-8">
                  <input type="text" name="msg" placeholder="Type your question"
                    class="   h-[2.5rem] md:h-[4rem] md:p-4 p-2 px-4 md:px-6 w-[10rem] md:w-[30rem] lg:w-[50rem] text-gray-800">
                </div>

                <!-- CTA button -->
                <button type="submit"
                  class="bg-orange-500 h-[2.5rem] md:h-[4rem] text-white  md:font-bold md:p-4 p-2 px-4 md:px-6 hover:bg-gray-900 transition">
                  Contact Us
                </button>
              </div>
              </form>

              <!-- Bottom paragraph -->
              <p class="mt-8 w-full lg:w-[50rem] mx-auto text-center">
              Gaitanoe Properties connects people to genuine lands, homes, and commercial spaces across Nigeria. We simplify buying, selling, and investing—backed by integrity, market insight, and personalized service.
              </p>
            </div>
          </div>
        </div>




        <?php include('includes/footer.php'); ?>

</div>
  </div>
</body>
</html>
