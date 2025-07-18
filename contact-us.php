<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>

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

<div class="my-[10rem]">

   <div class="container mx-auto px-4 max-w-3xl">
 <form id="enquiry-form-element" action="#" method="POST" class="space-y-6">
                        <!-- First Name -->
                        <div>
                            <input type="text" name="first-name" id="first-name" placeholder="First Name*" class="mt-1 block w-full px-4 py-3 border border-gray-300  shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#002f61] focus:border-[#002f61]" required>
                        </div>
                        
                        <!-- Last Name -->
                        <div>
                            <input type="text" name="last-name" id="last-name" placeholder="Last Name*" class="mt-1 block w-full px-4 py-3 border border-gray-300  shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#002f61] focus:border-[#002f61]" required>
                        </div>

                        <!-- Preferred means of contact -->
                        <fieldset>
                            <legend class="text-base font-medium text-[#002f61]">Preferred means of contact</legend>
                            <div class="mt-4 space-x-8 flex">
                                <div class="flex items-center">
                                    <input id="contact-phone" name="contact-method" type="radio" value="phone" class="h-4 w-4 text-[#002f61] focus:ring-orange-500 border-gray-300" checked>
                                    <label for="contact-phone" class="ml-3 block text-sm font-medium text-gray-700">Phone</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="contact-email" name="contact-method" type="radio" value="email" class="h-4 w-4 text-[#002f61] focus:ring-orange-500 border-gray-300">
                                    <label for="contact-email" class="ml-3 block text-sm font-medium text-gray-700">Email</label>
                                </div>
                            </div>
                        </fieldset>

                        <!-- Email -->
                        <div id="email-field">
                            <input type="email" name="email" id="email" placeholder="Email*" class="mt-1 block w-full px-4 py-3 border border-gray-300  shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#002f61] focus:border-[#002f61]" required>
                        </div>

                        <!-- Mobile Number -->
                        <div id="mobile-field">
                            <input type="tel" name="mobile-number" id="mobile-number" placeholder="Mobile number*" class="mt-1 block w-full px-4 py-3 border border-gray-300  shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#002f61] focus:border-[#002f61]" required>
                        </div>

                        <!-- Enquiry -->
                        <div>
                            <textarea id="enquiry" name="enquiry" rows="4" placeholder="Enquiry" class="mt-1 block w-full px-4 py-3 border border-gray-300  shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#002f61] focus:border-[#002f61]"></textarea>
                        </div>
                        
                        <!-- Disclaimer -->
                        <div>
                            <p class="text-sm text-gray-500">Please note by submitting this form, you will receive marketing materials from Gainatoe Properties tailored to your property needs.</p>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="inline-flex justify-center py-3 px-12 border border-transparent shadow-sm text-sm font-bold  text-white bg-[#c9271b] hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition-colors">
                                SUBMIT
                            </button>
                        </div>
                    </form>

                      <!-- Success Modal -->
    <div id="success-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-8 shadow-2xl text-center max-w-md mx-4">
            <svg class="w-16 h-16 mx-auto text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <h3 class="text-2xl font-bold text-[#002f61] mt-4">Thank You!</h3>
            <p class="text-gray-600 mt-2">Your enquiry has been sent successfully. We will be in touch with you shortly.</p>
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



        // Run after the DOM is fully parsed
document.addEventListener('DOMContentLoaded', () => {
  // Grab the query string, e.g. "?msg=Hello%20World"
  const params = new URLSearchParams(window.location.search);

  // Check if ?msg= is present
  if (params.has('msg')) {
    // Get the raw value
    let raw = params.get('msg');

    // Decode percent‐encoding (%20 => space, etc.)
    // and convert plus signs (+) to spaces (URLSearchParams leaves them intact)
    const decodedMsg = decodeURIComponent(raw).replace(/\+/g, ' ');

    // Insert into the textarea if it exists
    const textarea = document.getElementById('enquiry');
    if (textarea) textarea.value = decodedMsg;
  }
});


    </script>
                    </div>
   
</div>





<?php include('includes/footer.php'); ?>


</div>
  </div>
</body>
</html>
