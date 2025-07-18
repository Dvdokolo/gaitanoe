<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rise Statement</title>
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
          <img src="images/RISE-LEADERS-1024x683.webp" alt="Background" class="w-full h-full object-cover">

          <!-- Dark overlay with opacity -->
          <div class="absolute inset-0 bg-black/50 flex flex-col justify-center p-8 md:p-16">
            <!-- Content container -->
            <div class="text-white">
              <h1 class="text-4xl md:text-5xl font-bold mb-4 text-center ">
               
Rise Statement
              </h1>

          
              </div>
            </div>
          </div>
        
<div class="mx-5 w-full md:w-[43rem] lg:mx-auto p-5 lg:p-[2rem] ">
<p class="text-center">
 We, leaders, gathered on the 27 March 2021 in the year two thousand and twenty-one in
Sydney, to define and realise a practical and tactical commitment to the Rise Leader's
Statement on the future of the real estate profession.
</p>

<br>
<br>
<p class="text-center">
Together, we demand bold leaps to elevate our profession so that we constitute
a community of professionals that is recognisable by the human-centric values of
safety, respect, care, inclusion and a commitment to bravely challenging ourselves
and striving to be better. We empower the members of our community of practice
to be authentic, curious, innovative and kind. We tell an unafraid truth, no matter
how inconvenient. In doing so, we will become proud and trustworthy within the
communities we serve.
</p>

<br>
<br>
<p class="text-center">
These are not merely stated, they are not simply written on a wall or printed in a
brochure as artefacts of a momentary intention. They are agreed, believed, and
operationalised into our organisations by education and by choice, and they are
sustained through demonstration and accountability. These values are alive in the
experience of every member of our community through the behaviour, actions, and
language that we accept of ourselves and each other.
</p>

<br>
<br>
<p class="text-center">
Moving beyond intention, leaders must champion accountability for the impact of
the behaviour that occurs in the environment. Leaders provide an example and an
environment of psychological safety whereby these values are supported, and also
improved upon as awareness and education cause us to grow and develop better
standards. Leaders can be a voice to either amplify or silence behaviour when no one
is watching. Leaders should be the champions of right behaviours. 
</p>

<br>
<br>
<p class="text-center">
Everyone in an environment can be a leader. Everyone on the team is empowered
to protect the integrity of the environment and to hold each other accountable to
either align or to learn. The vehicle of this alignment and learning begins with trust
and safety, and is realised through clear expectations and courageous conversations.
We can only expect fidelity to these values once we are reconciled that misaligned
behaviour has consequences.
</p>

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
