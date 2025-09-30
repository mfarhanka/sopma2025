<?php
// Menu items array: 'Label' => 'Link'
$menu_items = [
    'Home' => 'index.php',
    'Schedule' => 'schedule.php',
    'Results' => 'results.php',
    'Venues' => 'venue.php',
    'Athletes' => 'athlete.php',
    'Sports' => 'sports.php',
    'Baton Run' => 'baton.php'
];

// Current page for active highlight
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="bg-[#1A3A4C] text-white fixed w-full z-50 shadow-lg">
  <div class="container mx-auto flex justify-between items-center p-4">
    <!-- Logo -->
    <a href="index.php" 
       class="text-xl font-bold tracking-wide focus:outline-none focus:ring-2 focus:ring-[#FFD23A] 
              bg-gradient-to-r from-[#FF7C27] to-[#FFD23A] text-transparent bg-clip-text">
      SOPMA XXII 2025
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
      <?php foreach ($menu_items as $name => $link): ?>
        <li>
          <a href="<?= $link ?>" 
             class="px-2 py-1 rounded focus:outline-none focus:ring-2 focus:ring-[#FFD23A]
                    hover:text-[#FF7C27] <?= $current_page === basename($link) ? 'underline' : '' ?>">
            <?= $name ?>
            <?php if($name === 'Schedule'): ?>
              <span class="ml-1 text-xs bg-yellow-400 text-black rounded px-1">Tentative</span>
            <?php endif; ?>
          </a>
        </li>
      <?php endforeach; ?>
      
    </ul>
    <!-- Floating Translate Button -->
<div id="translate-button" style="
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 999;
">
    <button onclick="toggleTranslateDropdown()" 
            class="px-4 py-2 bg-blue-600 text-white rounded shadow-lg hover:bg-blue-700 transition">
        🌐 Translate
    </button>

    <div id="translate-options" style="display:none; margin-top: 5px;">
        <button onclick="translateTo('en')" class="w-full px-4 py-2 bg-white text-gray-800 rounded mb-1 shadow">English</button>
        <button onclick="translateTo('ms')" class="w-full px-4 py-2 bg-white text-gray-800 rounded shadow">Malay</button>
    </div>
</div>

  </div>

  <!-- Mobile Menu Overlay -->
  <div id="mobile-menu" class="fixed inset-0 bg-black bg-opacity-70 hidden z-40">
    <div class="bg-[#1A3A4C] w-3/4 h-full p-6 space-y-6 transform -translate-x-full transition-transform duration-300 ease-in-out" id="menu-panel">
      <button id="close-menu" class="text-white text-2xl focus:outline-none focus:ring-2 focus:ring-[#FFD23A]" aria-label="Close menu">✕</button>
      
      <ul class="space-y-6 mt-8 text-lg font-semibold">
        <?php foreach ($menu_items as $name => $link): ?>
          <li>
            <a href="<?= $link ?>" 
               class="block px-2 py-1 rounded focus:outline-none focus:ring-2 focus:ring-[#FFD23A]
                      hover:text-[#FF7C27] <?= $current_page === basename($link) ? 'underline' : '' ?>">
              <?= $name ?>
              <?php if($name === 'Schedule'): ?>
                <span class="ml-1 text-xs bg-yellow-400 text-black rounded px-1">Tentative</span>
              <?php endif; ?>
            </a>
          </li>
        <?php endforeach; ?>
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

  mobileMenu.addEventListener("click", (e) => {
    if (e.target === mobileMenu) closeMenu.click();
  });
</script>
