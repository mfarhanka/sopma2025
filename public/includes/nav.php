<?php
// If $menu_items isn't already provided by the including file, define sensible defaults.
if (!isset($menu_items) || !is_array($menu_items)) {
  $menu_items = [
    'Home'      => 'index.php',
    'Schedule'  => 'schedule.php',
    'Results'   => 'results.php',
    'Venues'    => 'venue.php',
    'Athletes'  => 'athlete.php',
    'Sports'    => 'sports.php',
    'Baton Run' => 'baton.php'
  ];
}

// current page for active highlight
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="bg-blue-900 text-white fixed w-full z-50 shadow-lg" role="navigation" aria-label="Main navigation">
  <div class="max-w-7xl mx-auto flex justify-between items-center p-4">
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
      <span class="sr-only">Open menu</span>
      <!-- simple accessible hamburger -->
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path>
      </svg>
    </button>

    <!-- Desktop Menu -->
    <ul class="hidden lg:flex space-x-6 font-medium items-center">
      <?php foreach ($menu_items as $name => $link): 
        $is_active = $current_page === basename($link); ?>
        <li>
          <a href="<?php echo htmlspecialchars($link, ENT_QUOTES); ?>"
             class="px-2 py-1 rounded focus:outline-none focus:ring-2 focus:ring-[#FFD23A]
                    hover:text-blue-300 <?php echo $is_active ? 'underline text-blue-300' : 'text-white'; ?>"
             <?php echo $is_active ? 'aria-current="page"' : ''; ?>>
            <?php echo htmlspecialchars($name, ENT_QUOTES); ?>
            <?php if ($name === 'Schedule'): ?>
              <span class="ml-1 text-xs bg-yellow-400 text-black rounded px-1" aria-hidden="true">Tentative</span>
            <?php endif; ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <!-- Mobile Menu Overlay -->
  <div id="mobile-menu" class="fixed inset-0 bg-black bg-opacity-70 hidden z-40">
    <nav id="menu-panel" class="bg-blue-900 w-3/4 max-w-xs h-full p-6 space-y-6 transform -translate-x-full transition-transform duration-300 ease-in-out" aria-label="Mobile navigation">
      <div class="flex items-center justify-between">
        <a href="index.php" class="text-lg font-bold text-white">SOPMA XXII</a>
        <button id="close-menu" class="text-white text-2xl focus:outline-none focus:ring-2 focus:ring-[#FFD23A]" aria-label="Close menu">&times;</button>
      </div>

      <ul class="space-y-6 mt-4 text-lg font-semibold">
        <?php foreach ($menu_items as $name => $link):
          $is_active = $current_page === basename($link); ?>
          <li>
            <a href="<?php echo htmlspecialchars($link, ENT_QUOTES); ?>"
               class="block px-2 py-1 rounded focus:outline-none focus:ring-2 focus:ring-[#FFD23A]
                      hover:text-blue-300 <?php echo $is_active ? 'underline text-blue-300' : 'text-white'; ?>"
               <?php echo $is_active ? 'aria-current="page"' : ''; ?>>
              <?php echo htmlspecialchars($name, ENT_QUOTES); ?>
              <?php if ($name === 'Schedule'): ?>
                <span class="ml-1 text-xs bg-yellow-400 text-black rounded px-1" aria-hidden="true">Tentative</span>
              <?php endif; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
</nav>

<script>
  (function () {
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    const menuPanel = document.getElementById("menu-panel");
    const closeMenu = document.getElementById("close-menu");

    // safe-guard: if any element missing, don't attach listeners
    if (!menuBtn || !mobileMenu || !menuPanel || !closeMenu) return;

    function openMobileMenu() {
      mobileMenu.classList.remove("hidden");
      // small timeout so transition occurs (ensure panel is mounted)
      setTimeout(() => menuPanel.classList.remove("-translate-x-full"), 10);
      menuBtn.setAttribute("aria-expanded", "true");
      // trap focus could be added for accessibility
    }

    function closeMobileMenu() {
      menuPanel.classList.add("-translate-x-full");
      setTimeout(() => mobileMenu.classList.add("hidden"), 300);
      menuBtn.setAttribute("aria-expanded", "false");
    }

    menuBtn.addEventListener("click", openMobileMenu);
    closeMenu.addEventListener("click", closeMobileMenu);

    // Close if clicking overlay outside panel
    mobileMenu.addEventListener("click", (e) => {
      if (e.target === mobileMenu) closeMobileMenu();
    });

    // Close on Escape
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        // only close if mobile menu is visible
        if (!mobileMenu.classList.contains("hidden")) {
          closeMobileMenu();
        }
      }
    });
  })();
</script>
