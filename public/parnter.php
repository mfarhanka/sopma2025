<?php
// Example sponsors/partners with international URLs + logo image paths
$partners = [
  [
    "name" => "MSDeaf",
    "url"  => "https://msdeaf.org.my/",
    "logo" => "assets/images/logo.png"
  ],
  [
    "name" => "SOPMA XXII 2025 Sarawak",
    "url"  => "https://msdeaf.org.my/",
    "logo" => "assets/images/logo-sopma.png"
  ],
  [
    "name" => "MSDeaf",
    "url"  => "https://msdeaf.org.my/",
    "logo" => "assets/images/logo.png"
  ],
  [
    "name" => "SOPMA XXII 2025 Sarawak",
    "url"  => "https://msdeaf.org.my/",
    "logo" => "assets/images/logo-sopma.png"
  ],
  [
    "name" => "MSDeaf",
    "url"  => "https://msdeaf.org.my/",
    "logo" => "assets/images/logo.png"
  ],
  [
    "name" => "SOPMA XXII 2025 Sarawak",
    "url"  => "https://msdeaf.org.my/",
    "logo" => "assets/images/logo-sopma.png"
  ],
];
?>

<!-- Sponsors/Partners Carousel Section -->
<section class="bg-gradient-to-b from-gray-50 via-white to-gray-50 py-12">
  <div class="max-w-7xl mx-auto px-6">
    
    <!-- Title -->
    <h2 class="text-center text-3xl md:text-4xl font-extrabold text-gray-900 mb-8 tracking-tight">
      🌍 Our Global Partners & Sponsors
    </h2>

    <!-- Carousel Container -->
    <div class="relative overflow-hidden">
      <div class="flex animate-scroll gap-12">
        <?php foreach ($partners as $partner): ?>
          <a href="<?php echo $partner['url']; ?>" target="_blank" 
             class="flex-shrink-0 w-44 h-24 flex items-center justify-center 
                    bg-white rounded-2xl shadow-md border border-gray-100
                    hover:shadow-xl hover:border-indigo-200 
                    transition-all duration-300 transform hover:scale-110">
            <img src="<?php echo $partner['logo']; ?>" 
                 alt="<?php echo $partner['name']; ?> Logo"
                 class="max-h-16 object-contain grayscale hover:grayscale-0 transition duration-300" />
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Carousel Animation -->
<style>
  @keyframes scroll {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  .animate-scroll {
    animation: scroll 35s linear infinite;
    width: max-content;
  }
</style>
