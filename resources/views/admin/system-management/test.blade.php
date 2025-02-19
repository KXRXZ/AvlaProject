<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
  <title>ALVA TRUCKING SERVICE</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  
  <!-- Navbar -->
<!-- Navbar -->
<nav class="bg-[#FFF6EF] dark:bg-gray-900 fixed w-full z-50 top-0 left-0">
  <div class="flex items-center justify-center px-6">
    <div class="flex items-center justify-center space-x-3">
      <img src="{{ asset('storage/images/ico/avla-logo.png') }}" class="w-15 h-20" alt="Avla Trucking Service" />
    </div>
    <div class="flex items-center justify-center ml-auto">
      <ul class="flex space-x-14 md:space-x-14 font-medium">
        <li class="group relative">
          <a href="#home" data-section="home" class="nav-link block py-6 px-3 text-xl text-orange-400 hover:text-[#024764] transition duration-300 group-hover:-translate-y-1">Home</a>
          <div class="h-0.5 bg-[#024764] absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 group-hover:w-full transition-all duration-300"></div>
        </li>
        <li class="group relative">
          <a href="#about" data-section="about" class="nav-link block py-6 px-3 text-xl text-orange-400 hover:text-[#024764] transition duration-300 group-hover:-translate-y-1">About</a>
          <div class="h-0.5 bg-[#024764] absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 group-hover:w-full transition-all duration-300"></div>
        </li>
        <li class="group relative">
          <a href="#trucks" data-section="trucks" class="nav-link block py-6 px-3 text-xl text-orange-400 hover:text-[#024764] transition duration-300 group-hover:-translate-y-1">Trucks</a>
          <div class="h-0.5 bg-[#024764] absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 group-hover:w-full transition-all duration-300"></div>
        </li>
        <li class="group relative">
          <a href="#faqs" data-section="faqs" class="nav-link block py-6 px-3 text-xl text-orange-400 hover:text-[#024764] transition duration-300 group-hover:-translate-y-1">FAQs</a>
          <div class="h-0.5 bg-[#024764] absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 group-hover:w-full transition-all duration-300"></div>
        </li>
        <li class="group relative">
          <a href="#contact" data-section="contact" class="nav-link block py-6 px-3 text-xl text-orange-400 hover:text-[#024764] transition duration-300 group-hover:-translate-y-1">Contact</a>
          <div class="h-0.5 bg-[#024764] absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 group-hover:w-full transition-all duration-300"></div>
        </li>
        <!-- Theme Toggle -->
        <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-sm p-2.5">
          <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
          </svg>
          <svg id="theme-toggle-light-icon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
          </svg>
        </button>
      </ul>
    </div>
  </div>
</nav>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".nav-link");

    function updateActiveLink() {
      let scrollPosition = window.scrollY;

      links.forEach((link) => {
        const section = document.querySelector(link.getAttribute("href"));
        if (section) {
          const sectionTop = section.offsetTop - 50;
          const sectionHeight = section.offsetHeight;

          if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            links.forEach((l) => {
              l.classList.remove("text-[#024764]", "font-bold");
              l.classList.add("text-orange-400"); // Reset others to default
            });
            link.classList.add("text-[#024764]", "font-bold");
            link.classList.remove("text-orange-400"); // Remove default class
          }
        }
      });
    }

    updateActiveLink();
    window.addEventListener("scroll", updateActiveLink);
  });
</script>

  <!-- Sections -->
<!-- Home Section -->
<div id="home" class="flex flex-col justify-center items-center h-screen bg-[#FFF6EF] px-8">
    <div id="home-content" class="opacity-0 translate-y-8 transition-all duration-1000 ease-out text-center">
      <div class="text-7xl font-extrabold text-orange-400 mb-4">AVLA TRUCKING</div>
      <span class="text-lg text-[#024764] dark:text-gray-300 whitespace-nowrap">
        Our truck rental service offers reliable and spacious vehicles for transporting large shipments and heavy cargo.
      </span>
      
      <div class="mt-8 flex items-center justify-center">
        <button class="bg-white border-2 border-[#FAE3D3] text-[#024764] hover:bg-[#17212A] hover:text-white py-3 px-6 text-sm transition-all duration-300 h-10 w-56 flex items-center justify-center rounded-lg">
          Book Now
        </button>
      </div>
      
      
      </div>
    </div>
</div>
  <script>
    function applyAnimation() {
      var homeContent = document.getElementById("home-content");
      homeContent.classList.remove("opacity-0", "translate-y-8"); 
      homeContent.classList.add("opacity-100", "translate-y-0");
    }
    window.addEventListener('load', applyAnimation);
    window.addEventListener('hashchange', function() {
      if (window.location.hash === '#home') {
        applyAnimation();
      }
    });
    document.querySelector('a[href="#home"]').addEventListener('click', function() {
      applyAnimation();
    });
  </script>
<!-- About Section -->
<div id="about" class="min-h-screen bg-[#FFF6EF] flex flex-col justify-center items-center scroll-mt-10 px-6">  
  <!-- Content Grid -->
  <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-16 mt-12"> <!-- Adjusted gap and max width -->
      <div class="p-10 rounded-lg flex items-center justify-center text-center">
          <div>
              <h2 class="text-4xl text-orange-400">Our Mission</h2>
              <p class="text-[#024764] mt-6 text-lg " style="text-align: justify;">
                  Our mission is to provide dependable, spacious, and well-maintained trucks tailored to meet diverse transportation needs. We are committed to ensuring safe, efficient, and timely deliveries while prioritizing customer satisfaction, innovation, and industry-leading service standards.
              </p>                
          </div>
      </div>
      <div>
          <img src="{{ asset('storage/images/ico/trucks.png') }}" alt="About Image 1" class="w-full h-[350px] object-cover rounded-lg">
      </div>
      <div>
          <img src="{{ asset('storage/images/ico/trucks.png') }}" alt="About Image 2" class="w-full h-[350px] object-cover rounded-lg">
      </div>
      <div class="p-10 rounded-lg flex items-center justify-center text-center">
          <div>
              <h2 class="text-4xl text-orange-400">Our Vision</h2>
              <p class="text-[#024764] mt-6 text-lg" style="text-align: justify;">
                  To be the leading provider of trucking services, recognized for excellence, reliability, and customer satisfaction. We strive to innovate, expand our fleet, and enhance logistics efficiency to meet the evolving needs of our clients while maintaining top-tier service quality.
              </p>                
          </div>
      </div>
  </div>
</div>
 <!-- Trucks Section -->
<div id="trucks" class="h-screen bg-[#FFF6EF]  flex flex-col justify-center items-center scroll-mt-10">
    <h1 class="text-[32px] font-semibold text-orange-400">Truck Classifications</h1>
    <p class="text-sm text-[#024764] text-center max-w-xl mt-2">
      From robust utility trucks to versatile cargo vans, our carefully curated selection ensures
    </p>
    <!-- Truck Filter Buttons -->
    <div class="flex justify-center space-x-4 py-6">
      <button class="bg-white hover:text-white hover:bg-[#17212A] border-2 border-[#FAE3D3] text-[#024764] py-2 px-6 rounded-lg">6 Wheeler Truck</button>
      <button class="bg-white hover:text-white hover:bg-[#17212A] border-2 border-[#FAE3D3] text-[#024764] py-2 px-6 rounded-lg">10 Wheeler Truck</button>
    </div>
    <!-- Truck Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-8 py-6">
      <!-- Card 1 -->
      <div class="w-[360px] h-[550px] max-w-sm p-8 bg-white border-2 border-[#FAE3D3] shadow-md flex flex-col items-center rounded-lg">
        <div class="bg-white border-2 border-[#FAE3D3] h-48 w-full rounded-md flex justify-center items-center">
          <img src="{{ asset('storage/images/ico/img1.png') }}" alt="Your Image" class="h-full w-full object-cover rounded-md">
        </div> <h2 class="text-xl text-[#024764] font-bold mt-6 text-center">TATA Ace HT mini</h2>
        <ul class="mt-3 text-[#024764] text-base space-y-2 text-center">
          <li>&#10004; Manual Transmission</li>
          <li>&#10004; Air Condition</li>
          <li>&#10004; 4 Passengers</li>
        </ul>
        <button class="mt-16 w-full bg-white hover:text-white hover:bg-[#17212A] border-2 border-[#FAE3D3] text-[#024764] py-3 text-base rounded-lg w-64">Rent Now</button>
      </div>
      <!-- Card 2 -->
      <div class="w-[360px] h-[550px] max-w-sm p-8 bg-white border-2 border-[#FAE3D3] shadow-md flex flex-col items-center rounded-lg">
        <div class="bg-white border-2 border-[#FAE3D3] h-48 w-full rounded-md flex justify-center items-center">
          <img src="{{ asset('storage/images/ico/img1.png') }}" alt="Your Image" class="h-full w-full object-cover rounded-md">
        </div>
          <h2 class="text-xl text-[#024764] font-bold mt-6 text-center">TATA Ace HT mini</h2>
        <ul class="mt-3 text-[#024764] text-base space-y-2 text-center">
          <li>&#10004; Manual Transmission</li>
          <li>&#10004; Air Condition</li>
          <li>&#10004; 4 Passengers</li>
        </ul>
        <button class="mt-16 w-full bg-white hover:text-white hover:bg-[#17212A] border-2 border-[#FAE3D3] text-[#024764] py-3 text-base rounded-lg w-64">Rent Now</button>
      </div>
      <!-- Card 3 -->
      <div class="w-[360px] h-[550px] max-w-sm p-8 bg-white border-2 border-[#FAE3D3] shadow-md flex flex-col items-center rounded-lg">
        <div class="bg-white border-2 border-[#FAE3D3] h-48 w-full rounded-md flex justify-center items-center">
          <img src="{{ asset('storage/images/ico/img1.png') }}" alt="Your Image" class="h-full w-full object-cover rounded-md">
        </div>        <h2 class="text-xl text-[#024764] font-bold mt-6 text-center">TATA Ace HT mini</h2>
        <ul class="mt-3 text-[#024764] text-base space-y-2 text-center">
          <li>&#10004; Manual Transmission</li>
          <li>&#10004; Air Condition</li>
          <li>&#10004; 4 Passengers</li>
        </ul>
        <button class="mt-16 w-full bg-white hover:text-white hover:bg-[#17212A] border-2 border-[#FAE3D3] text-[#024764] py-3 text-base rounded-lg w-64">Rent Now</button>
      </div>
    </div>
</div>  
  <!-- FAQs Section -->
<div id="faqs" class="section flex justify-center items-center h-screen bg-[#FFF6EF] pt-10 scroll-mt-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center p-10 max-w-6xl w-full">
        <!-- Left Grid (Accordion) -->
        <div class="w-full">
            <div class="space-y-6">
                <div class="border-2 border-[#FAE3D3] rounded-lg shadow-md">
                    <button class="w-full text-left p-4 text-[18px] font-semibold text-[#024764] font-inter flex justify-between items-center" onclick="toggleFAQ(this)">
                        <span class="faq-toggle text-orange-400">+</span> 
                        <span class="flex-grow text-center">What is AVLA Trucking?</span>
                    </button>
                    <div class="hidden p-4 text-[#024764] font-inter font-medium">
                      AVLA Trucking is a reliable trucking service that provides transportation solutions.
                    </div>
                </div>
                <div class="border-2 border-[#FAE3D3] rounded-lg shadow-md">
                    <button class="w-full text-left p-4 text-[18px] font-semibold text-[#024764] font-inter flex justify-between items-center" onclick="toggleFAQ(this)">
                        <span class="faq-toggle text-orange-400">+</span>
                        <span class="flex-grow text-center">How Can I Contact AVLA Trucking?</span>
                    </button>
                    <div class="hidden p-4 text-[#024764] font-inter font-medium">
                      You can contact us via email or phone. Visit our contact page for more details.
                    </div>
                </div>
                <div class="border-2 border-[#FAE3D3] rounded-lg shadow-md">
                    <button class="w-full text-left p-4 text-[18px] font-semibold text-[#024764] font-inter flex justify-between items-center" onclick="toggleFAQ(this)">
                        <span class="faq-toggle text-orange-400">+</span>
                        <span class="flex-grow text-center">What Services Do You Offer?</span>
                    </button>
                    <div class="hidden p-4 text-[#024764] font-inter font-medium">
                      We offer truck rentals, freight transportation, and logistics solutions.
                    </div>
                </div>
            </div>
        </div>
        <!-- Right Grid (Title & Image) -->
        <div class="flex flex-col items-center w-full text-center">
            <h1 class="text-[32px] font-semibold text-orange-400">Frequently Asked Questions</h1>
            <p class="text-sm text-[#024764] text-center max-w-xl mt-2">
                If you have any questions, feel free to reach out to us in whatever way works best for you.
            </p>
            <img src="{{ asset('storage/images/ico/faqlogo.png') }}" class="mt-12 h-[300px] w-[550px] mx-auto" alt="FAQs" />
        </div>
    </div>
    
    <script>
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            const toggleSign = button.querySelector('.faq-toggle');
            
            // Toggle the visibility of the FAQ answer
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                toggleSign.textContent = '-';
            } else {
                content.classList.add('hidden');
                toggleSign.textContent = '+';
            }
        }
    </script>
</div>
 <!-- Contact Section -->
<div class="flex flex-col items-center justify-center h-screen w-full bg-cover bg-center" 
style="background-image: url('{{ asset('storage/images/ico/bg.jpg') }}');">

<div id="contact" class="text-center mb-6 w-full ">
    <div class="flex justify-center items-center w-full mt-40">
        <div class="bg-white p-8 border-2 border-[#FAE3D3] shadow-lg w-full max-w-md text-center">
    <h1 class="text-[32px] font-semibold text-orange-500">Contact Us</h1>
    <p class="text-[#024764] mb-4">
        Complete the form and a team member will be in touch shortly.
    </p>
    <form class="space-y-4">
        <div class="grid grid-cols-2 gap-4">
            <input type="text" placeholder="Full Name" class="w-full p-2 bg-white  border-2 border-[#FAE3D3] text-black focus:ring-white">
            <input type="text" placeholder="Company" class="w-full p-2 bg-white  border-2 border-[#FAE3D3] text-black focus:ring-white">
            <input type="tel" placeholder="Phone" class="w-full p-2 bg-white  border-2 border-[#FAE3D3] text-black focus:ring-white">
            <input type="email" placeholder="Email" class="w-full p-2 bg-white  border-2 border-[#FAE3D3] text-black focus:ring-white">
            <input type="text" placeholder="Location" class="w-[385px] p-2 bg-white  border-2 border-[#FAE3D3] text-black focus:ring-white">
        </div>
        <textarea placeholder="Your Message" class="w-full p-2 bg-white  border-2 border-[#FAE3D3] text-black focus:ring-white min-h-[100px]"></textarea>
        <button class="w-full bg-white  text-[#024764] py-1 px-2 border-2 border-[#FAE3D3] font-semibold hover:text-white hover:bg-[#17212A] w-24 mx-auto rounded-lg">
            Submit
        </button>
    </form>
</div>
    </div>
</div>
</div>
<!-- Footer -->
<footer class="bg-[#FFF6EF]  p-6 w-full">
 <div class="max-w-6xl mx-auto grid grid-cols-4 gap-6 text-sm text-white">
    <div class="-ml-5">
    <h3 class="text-orange-400 text-4xl font-bold">Avla Trucking</h3>
    <p class="text-[#024764]">123-456-7890</p>
    <p class="text-[#024764]">avla.com</p>
    <p class="text-[#024764]">1234 Street, City, State</p>
</div>
     <div>
         <h3 class="font-semibold text-2xl text-orange-400">Quick Links</h3>
         <ul class="space-y-1">
             <li><a href="#home" class="hover:underline capitalize text-[#024764]">Home</a></li>
             <li><a href="#about" class="hover:underline capitalize text-[#024764]">About</a></li>
             <li><a href="#trucks" class="hover:underline capitalize text-[#024764]">Trucks</a></li>
             <li><a href="#faqs" class="hover:underline capitalize text-[#024764]">FAQs</a></li>
             <li><a href="#contact" class="hover:underline capitalize text-[#024764]">Contact</a></li>
         </ul>
     </div>
     <div>
         <h3 class="font-semibold text-2xl text-orange-400">Destinations</h3>
         <ul class="space-y-1 text-[#024764]">
             <li>Manila</li>
             <li>Cavite</li>
             <li>Laguna</li>
             <li>Makati</li>
             <li>Batangas</li>
         </ul>
     </div>
     <div>
         <h3 class="font-semibold text-xl text-orange-400">Subscribe to our Social Media</h3>
         <p class="text-[#024764]">Follow us for updates, offers, and more!</p>
         <input type="email" placeholder="Email Address" class="mt-2 p-2 w-64 bg-white rounded-md text-black focus:outline-[#FFF6EF]">
         <div class="mt-4 flex items-center space-x-2 text-orange-400">
             <a href="#">
                 <img src="{{ asset('storage/images/ico/fbico.png') }}" alt="Facebook" class="w-6 h-6 hover:w-8 hover:h-8 transition-all duration-200">
             </a>
             <a href="#">
                 <img src="{{ asset('storage/images/ico/igico.png') }}" alt="Instagram" class="w-6 h-6 hover:w-8 hover:h-8 transition-all duration-200">
             </a>
             <a href="#">
                 <img src="{{ asset('storage/images/ico/twitterico.png') }}" alt="Twitter" class="w-6 h-6 hover:w-8 hover:h-8 transition-all duration-200">
             </a>
         </div>
     </div>
 </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>