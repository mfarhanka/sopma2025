<nav class="bg-[#1A3A4C] text-white fixed w-full z-50 shadow-lg">
  <div class="container mx-auto flex justify-between items-center p-4">
    <!-- Logo -->
    <a href="index.php" 
       class="text-xl font-bold tracking-wide focus:outline-none focus:ring-2 focus:ring-[#FFD23A] 
              bg-gradient-to-r from-[#FF7C27] to-[#FFD23A] text-transparent bg-clip-text">
      MSDeaf Games 2025
    </a>

    <!-- Mobile Menu Button -->
    <button 
      id="menu-btn" 
      class="lg:hidden block focus:outline-none focus:ring-2 focus:ring-[#FFD23A] p-2 rounded"
      aria-label="Toggle navigation menu" 
      aria-expanded="false"
    >
      ☰
    </button>

    <!-- Desktop Menu -->
    <ul class="hidden lg:flex space-x-6 font-medium">
      <li><a href="index.php" class="hover:text-[#FF7C27] focus:outline-none focus:ring-2 focus:ring-[#FFD23A] px-2 py-1 rounded">Home</a></li>
      <li><a href="schedule.php" class="hover:text-[#FF7C27] focus:outline-none focus:ring-2 focus:ring-[#FFD23A] px-2 py-1 rounded">Schedule</a></li>
      <li><a href="results.php" class="hover:text-[#FF7C27] focus:outline-none focus:ring-2 focus:ring-[#FFD23A] px-2 py-1 rounded">Results</a></li>
      <li><a href="venue.php" class="hover:text-[#FF7C27] focus:outline-none focus:ring-2 focus:ring-[#FFD23A] px-2 py-1 rounded">Venues</a></li>
      <li><a href="athlete.php" class="hover:text-[#FF7C27] focus:outline-none focus:ring-2 focus:ring-[#FFD23A] px-2 py-1 rounded">Athlete</a></li>
    </ul>
  </div>

  <!-- Mobile Menu Overlay -->
  <div id="mobile-menu" class="fixed inset-0 bg-black bg-opacity-70 hidden">
    <div class="bg-[#1A3A4C] w-3/4 h-full p-6 space-y-6 transform -translate-x-full transition-transform duration-300 ease-in-out" id="menu-panel">
      <button id="close-menu" class="text-white text-2xl focus:outline-none focus:ring-2 focus:ring-[#FFD23A]" aria-label="Close menu">✕</button>
      
      <ul class="space-y-6 mt-8 text-lg font-semibold">
        <li><a href="index.php" class="block hover:text-[#FF7C27] focus:outline-none focus:ring-2 focus:ring-[#FFD23A] rounded px-2 py-1">🏠 Home</a></li>
        <li><a href="schedule.php" class="block hover:text-[#FF7C27] focus:outline-none focus:ring-2 focus:ring-[#FFD23A] rounded px-2 py-1">📅 Schedule</a></li>
        <li><a href="results.php" class="block hover:text-[#FF7C27] focus:outline-none focus:ring-2 focus:ring-[#FFD23A] rounded px-2 py-1">🏆 Results</a></li>
        <li><a href="venue.php" class="block hover:text-[#FF7C27] focus:outline-none focus:ring-2 focus:ring-[#FFD23A] rounded px-2 py-1">📍 Venues</a></li>
        <li><a href="athlete.php" class="block hover:text-[#FF7C27] focus:outline-none focus:ring-2 focus:ring-[#FFD23A] rounded px-2 py-1">👤 Athlete</a></li>
      </ul>
    </div>
  </div>
</nav>


<script>
  const menuBtn = document.getElementById("menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");
  const menuPanel = document.getElementById("menu-panel");
  const closeMenu = document.getElementById("close-menu");

  menuBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("hidden");
    setTimeout(() => menuPanel.classList.remove("-translate-x-full"), 10);
    menuBtn.setAttribute("aria-expanded", "true");
  });

  closeMenu.addEventListener("click", () => {
    menuPanel.classList.add("-translate-x-full");
    setTimeout(() => mobileMenu.classList.add("hidden"), 300);
    menuBtn.setAttribute("aria-expanded", "false");
  });

  // Close menu on background click
  mobileMenu.addEventListener("click", (e) => {
    if (e.target === mobileMenu) {
      closeMenu.click();
    }
  });
</script>
