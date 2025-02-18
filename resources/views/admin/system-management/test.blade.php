<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ALVA TRUCKING SERVICE</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <!-- Navbar -->
  <nav class="bg-white dark:bg-gray-900 fixed w-full z-50 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="flex items-center justify-center px-6">
      <div class="flex items-center justify-center space-x-3">
        <img src="{{ asset('storage/images/ico/avla-logo.png') }}" class="w-15 h-20" alt="Avla Trucking Service" />
    </div>
      <div class="flex items-center justify-center ml-auto">
        <ul class="flex space-x-14 md:space-x-14 font-medium">
          <li class="group relative">
            <a href="#home" class="block py-6 px-3 text-xl text-orange-500 hover:text-[#024764] transform transition duration-300 group-hover:-translate-y-1">Home</a>
            <div class="h-0.5 bg-[#024764] absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 group-hover:w-full transition-all duration-300"></div>
          </li>
          <li class="group relative">
            <a href="#about" class="block py-6 px-3 text-xl text-orange-500 hover:text-[#024764] transform transition duration-300 group-hover:-translate-y-1">About</a>
            <div class="h-0.5 bg-[#024764] absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 group-hover:w-full transition-all duration-300"></div>
          </li>
          <li class="group relative">
            <a href="#trucks" class="block py-6 px-3 text-xl text-orange-500 hover:text-[#024764] transform transition duration-300 group-hover:-translate-y-1">Trucks</a>
            <div class="h-0.5 bg-[#024764] absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 group-hover:w-full transition-all duration-300"></div>
          </li>
          <li class="group relative">
            <a href="#faqs" class="block py-6 px-3 text-xl text-orange-500 hover:text-[#024764] transform transition duration-300 group-hover:-translate-y-1">FAQs</a>
            <div class="h-0.5 bg-[#024764] absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 group-hover:w-full transition-all duration-300"></div>
          </li>
          <li class="group relative">
            <a href="#contact" class="block py-6 px-3 text-xl text-orange-500 hover:text-[#024764] transform transition duration-300 group-hover:-translate-y-1">Contact</a>
            <div class="h-0.5 bg-[#024764] absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 group-hover:w-full transition-all duration-300"></div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Sections -->
<!-- Home Section -->
<div id="home" class="flex flex-col justify-center items-center h-screen bg-white px-8">
    <div id="home-content" class="opacity-0 translate-y-8 transition-all duration-1000 ease-out text-center">
      <div class="text-7xl font-extrabold text-orange-500 mb-4">AVLA TRUCKING</div>
      <span class="text-lg text-[#024764] dark:text-gray-300 whitespace-nowrap">
        Our truck rental service offers reliable and spacious vehicles for transporting large shipments and heavy cargo.
      </span>
      
      <div class="mt-8 flex items-center justify-center">
        <button class="bg-orange-500 hover:bg-[#024764] text-white font-bold py-3 px-6 rounded-full text-sm transition-all duration-300 h-10 w-56 flex items-center justify-center">
          Book Now
      </button>
      
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
<div id="about" class="min-h-screen bg-[#3B3B3B] flex flex-col justify-center items-center scroll-mt-10 px-6"> <!-- Reduced padding -->
  <!-- Content Grid -->
  <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-16 mt-12"> <!-- Adjusted gap and max width -->
      <div class="p-10 rounded-lg flex items-center justify-center text-center">
          <div>
              <h2 class="text-4xl text-orange-400 font-bold">Our Mission</h2>
              <p class="text-white mt-6 text-lg" style="text-align: justify;">
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
              <h2 class="text-4xl text-orange-400 font-bold">Our Vision</h2>
              <p class="text-white mt-6 text-lg" style="text-align: justify;">
                  To be the leading provider of trucking services, recognized for excellence, reliability, and customer satisfaction. We strive to innovate, expand our fleet, and enhance logistics efficiency to meet the evolving needs of our clients while maintaining top-tier service quality.
              </p>                
          </div>
      </div>
  </div>
</div>


  

 <!-- Trucks Section -->
<div id="trucks" class="h-screen bg-white flex flex-col justify-center items-center scroll-mt-10">
    <h1 class="text-[36px] font-bold text-[#024764] font-lato-bold">TRUCK CLASSIFICATIONS</h1>
    <p class="text-sm text-[#024764] text-center max-w-xl mt-2">
      From robust utility trucks to versatile cargo vans, our carefully curated selection ensures
    </p>

    <!-- Truck Filter Buttons -->
    <div class="flex justify-center space-x-4 py-6">
      <button class="bg-orange-400 hover:bg-[#024764] text-white font-bold py-2 px-6 rounded-full">6 Wheeler Truck</button>
      <button class="bg-orange-400 hover:bg-[#024764] text-white font-bold py-2 px-6 rounded-full">10 Wheeler Truck</button>
    </div>

    <!-- Truck Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-8 py-6">
      <!-- Card 1 -->
      <div class="w-[360px] h-[550px] max-w-sm p-8 bg-white border-1 border-[#024764] rounded-xl shadow-md flex flex-col items-center">
        <div class="bg-gray-300 h-48 w-full rounded-md"></div>
        <h2 class="text-xl text-[#024764] font-bold mt-6 text-center">TATA Ace HT mini</h2>
        <ul class="mt-3 text-[#024764] text-base space-y-2 text-center">
          <li>&#10004; Manual Transmission</li>
          <li>&#10004; Air Condition</li>
          <li>&#10004; 4 Passengers</li>
        </ul>
        <button class="mt-16 w-full bg-orange-500 hover:bg-[#024764] text-white py-3 rounded-full text-base font-bold">Rent Now</button>
      </div>

      <!-- Card 2 -->
      <div class="w-[360px] h-[550px] max-w-sm p-8 bg-white border-1 border-black rounded-xl shadow-md flex flex-col items-center">
        <div class="bg-gray-300 h-48 w-full rounded-md"></div>
        <h2 class="text-xl text-[#024764] font-bold mt-6 text-center">TATA Ace HT mini</h2>
        <ul class="mt-3 text-[#024764] text-base space-y-2 text-center">
          <li>&#10004; Manual Transmission</li>
          <li>&#10004; Air Condition</li>
          <li>&#10004; 4 Passengers</li>
        </ul>
        <button class="mt-16 w-full bg-orange-500 hover:bg-[#024764] text-white py-3 rounded-full text-base font-bold">Rent Now</button>
      </div>

      <!-- Card 3 -->
      <div class="w-[360px] h-[550px] max-w-sm p-8 bg-white border-1 border-black rounded-xl shadow-md flex flex-col items-center">
        <div class="bg-gray-300 h-48 w-full rounded-md"></div>
        <h2 class="text-xl text-[#024764] font-bold mt-6 text-center">TATA Ace HT mini</h2>
        <ul class="mt-3 text-[#024764] text-base space-y-2 text-center">
          <li>&#10004; Manual Transmission</li>
          <li>&#10004; Air Condition</li>
          <li>&#10004; 4 Passengers</li>
        </ul>
        <button class="mt-16 w-full bg-orange-500 hover:bg-[#024764] text-white py-3 rounded-full text-base font-bold">Rent Now</button>
      </div>
    </div>
</div>


  <!-- FAQs Section -->
<div id="faqs" class="section flex justify-center items-center h-screen bg-white pt-10 scroll-mt-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center p-10 max-w-6xl w-full">
        <!-- Left Grid (Accordion) -->
        <div class="w-full">
            <div class="space-y-6">
                <div class="border-2 border-[#024764] rounded-lg shadow-md">
                    <button class="w-full text-left p-4 text-[18px] font-semibold text-[#024764] font-inter flex justify-between items-center" onclick="toggleFAQ(this)">
                        <span class="faq-toggle text-orange-500">+</span> 
                        <span class="flex-grow text-center">What is AVLA Trucking?</span>
                    </button>
                    <div class="hidden p-4 text-[#024764] font-inter font-medium">
                      AVLA Trucking is a reliable trucking service that provides transportation solutions.
                    </div>
                </div>
                <div class="border-2 border-[#024764] rounded-lg shadow-md">
                    <button class="w-full text-left p-4 text-[18px] font-semibold text-[#024764] font-inter flex justify-between items-center" onclick="toggleFAQ(this)">
                        <span class="faq-toggle text-orange-500">+</span>
                        <span class="flex-grow text-center">How Can I Contact AVLA Trucking?</span>
                    </button>
                    <div class="hidden p-4 text-[#024764] font-inter font-medium">
                      You can contact us via email or phone. Visit our contact page for more details.
                    </div>
                </div>
                <div class="border-2 border-[#024764] rounded-lg shadow-md">
                    <button class="w-full text-left p-4 text-[18px] font-semibold text-[#024764] font-inter flex justify-between items-center" onclick="toggleFAQ(this)">
                        <span class="faq-toggle text-orange-500">+</span>
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
            <h1 class="text-[36px] font-bold text-[#024764] font-lato-bold">FREQUENTLY ASKED QUESTIONS</h1>
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

<div id="contact" class="text-center mb-6 w-full">
    <div class="flex justify-center items-center w-full mt-40">
        <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md text-center">
            <h1 class="text-[32px] font-semibold text-white">Contact Us</h1>
            <p class="text-gray-400 mb-4">
                Complete the form and a team member will be in touch shortly.
            </p>
            <form class="space-y-4">
              <div class="grid grid-cols-2 gap-4">
                  <input type="text" placeholder="Full Name" class="w-full p-2 bg-gray-700 rounded-md text-white focus:ring focus:ring-yellow-500">
                  <input type="text" placeholder="Company" class="w-full p-2 bg-gray-700 rounded-md text-white focus:ring focus:ring-yellow-500">
                  <input type="tel" placeholder="Phone" class="w-full p-2 bg-gray-700 rounded-md text-white focus:ring focus:ring-yellow-500">
                  <input type="email" placeholder="Email" class="w-full p-2 bg-gray-700 rounded-md text-white focus:ring focus:ring-yellow-500">
                  <input type="text" placeholder="Location" class="w-[385px] p-2 bg-gray-700 rounded-md text-white focus:ring focus:ring-yellow-500">
              </div>
              <textarea placeholder="Your Message" class="w-full p-2 bg-gray-700 rounded-md text-white focus:ring focus:ring-yellow-500 min-h-[100px]"></textarea>
              <button class="w-full bg-orange-400 text-black py-1 px-2 rounded-md font-semibold hover:bg-[#024764] w-24 mx-auto">
                  Submit
              </button>
          </form>
          
        </div>
    </div>
</div>
</div>



<!-- Footer -->
<footer class="bg-[#3B3B3B] p-6 w-full">
 <div class="max-w-6xl mx-auto grid grid-cols-4 gap-6 text-sm text-white">
    <div class="-ml-5">
    <h3 class="text-orange-400 text-4xl font-bold">Avla Trucking</h3>
    <p class="text-white">123-456-7890</p>
    <p class="text-white">avla.com</p>
    <p class="text-white">1234 Street, City, State</p>
</div>
     <div>
         <h3 class="font-semibold text-2xl text-orange-400">Quick Links</h3>
         <ul class="space-y-1">
             <li><a href="#home" class="hover:underline capitalize">Home</a></li>
             <li><a href="#about" class="hover:underline capitalize">About</a></li>
             <li><a href="#trucks" class="hover:underline capitalize">Trucks</a></li>
             <li><a href="#faqs" class="hover:underline capitalize">FAQs</a></li>
             <li><a href="#contact" class="hover:underline capitalize">Contact</a></li>
         </ul>
     </div>
     <div>
         <h3 class="font-semibold text-2xl  text-orange-400">Destinations</h3>
         <ul class="space-y-1">
             <li>Manila</li>
             <li>Cavite</li>
             <li>Laguna</li>
             <li>Makati</li>
             <li>Batangas</li>
         </ul>
     </div>
     <div>
         <h3 class="font-semibold text-xl text-orange-400">Subscribe to our Social Media</h3>
         <p class="text-white">Follow us for updates, offers, and more!</p>
         <input type="email" placeholder="Email Address" class="mt-2 p-2 w-64 bg-black rounded-md text-white focus:ring">
         <div class="mt-4 flex items-center space-x-2 text-orange-500">
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



</body>
</html>
