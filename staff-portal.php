<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Portal</title>
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

<div class="">

   <div class="container">
<div class="flex justify-between">
  <img src="images/staff.jpg" style="object-fit: cover;" class="h-screen w-[50rem] object-fill" alt="">

   <form id="enquiry-form-element" action="#" method="POST" class="mt-[8rem] mx-[5rem] space-y-6">
    <h1 class="font-bold text-2xl">
      Staff Portal
    </h1>
                      
                       

                        <!-- Email -->
                        <div id="email-field">
                            <input type="email" name="email" id="email" placeholder="Email*" class="mt-1 block w-full px-4 py-3 border border-gray-300  shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#002f61] focus:border-[#002f61]" required>
                        </div>

                        <!-- Mobile Number -->
                        <div id="mobile-field">
                            <input type="password" name="mobile-number" id="mobile-number" placeholder="Password*" class="mt-1 block w-full px-4 py-3 border border-gray-300  shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#002f61] focus:border-[#002f61]" required>
                        </div>

                        
                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="inline-flex justify-center py-3 px-12 border border-transparent shadow-sm text-sm font-bold  text-white bg-[#c9271b] hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition-colors">
                                SUBMIT
                            </button>
                        </div>
                    </form>

</div>
                      <!-- Success Modal -->
    <div id="success-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-8 shadow-2xl text-center max-w-md mx-4">
           <h3 class="text-2xl font-bold text-[#002f61] mt-4">Error</h3>
            <p class="text-gray-600 mt-2">Invalid Email or Password.</p>
            <button id="close-modal-btn" class="mt-6 inline-flex justify-center py-2 px-8 border border-transparent shadow-sm text-sm font-bold  text-white bg-[#c9271b] hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition-colors">
                Close
            </button>
        </div>
    </div>
                    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // --- Enquiry Form Submission Logic ---
            const enquiryForm = document.getElementById('enquiry-form-element');
            const successModal = document.getElementById('success-modal');
            const closeModalBtn = document.getElementById('close-modal-btn');

            if (enquiryForm && successModal && closeModalBtn) {
                enquiryForm.addEventListener('submit', function (event) {
                    // Prevent the default form submission
                    event.preventDefault();
                    
                    // Show the success modal
                    successModal.classList.remove('hidden');
                });

                // Function to close the modal
                const closeModal = () => {
                    successModal.classList.add('hidden');
                    // Reset the form fields for the next submission
                    enquiryForm.reset();
                };

                // Close modal when the close button is clicked
                closeModalBtn.addEventListener('click', closeModal);

                // Close modal when clicking on the background overlay
                successModal.addEventListener('click', function(event) {
                    if (event.target === successModal) {
                        closeModal();
                    }
                });
            }

            // --- Other script logic from previous steps would go here ---
        });
    </script>
                    </div>
   
</div>





<?php include('includes/footer.php'); ?>

</div>
  </div>
</body>
</html>
