<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>
<?php include 'includes/breadcrumb.php'; ?>

<main class="bg-gray-50 min-h-screen">

  <!-- Hero Section: Full Background -->
  <section class="relative h-96 md:h-[500px] w-full">
    <div class="absolute inset-0 bg-cover bg-center brightness-75" 
         style="background-image: url('assets/images/sport-hero.png');"></div>
    <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4">
      <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 drop-shadow-lg">🏆 SOPMA XXII Sarawak 2025 Sports</h1>
      <p class="text-lg md:text-2xl text-gray-200 max-w-3xl drop-shadow-md">
        Explore all sports competitions: Futsal, Badminton, Orienteering, Bowling, and Athletics (Olahraga).
      </p>
    </div>
  </section>

  <!-- Sports Cards Section -->
  <section class="max-w-7xl mx-auto px-4 lg:px-8 py-12 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

    <?php
    $sports = [
      "Futsal" => ["icon"=>"⚽","image"=>"assets/images/soccer.png","description"=>"Futsal matches at Indoor Stadium Kota Samarahan. Group stages leading to finals.","venue"=>"Indoor Stadium Kota Samarahan"],
      "Badminton" => ["icon"=>"🏸","image"=>"assets/images/Badminton.png","description"=>"Badminton tournaments at Arena Sukan Kuching. Singles and doubles matches.","venue"=>"Arena Sukan Kuching"],
      "Orienteering" => ["icon"=>"🧭","image"=>"assets/images/althete.png","description"=>"Orienteering at Sama Jaya Forest Park. Navigate courses with map and compass.","venue"=>"Sama Jaya Forest Park"],
      "Bowling" => ["icon"=>"🎳","image"=>"assets/images/Bowling.png","description"=>"Tenpin Bowling at Megalanes Sarawak. Individual and team events.","venue"=>"Megalanes Sarawak"],
      "Athletics / Olahraga" => ["icon"=>"🏃","image"=>"assets/images/runner.png","description"=>"Track and field events at Stadium Sarawak.","venue"=>"Stadium Sarawak"]
    ];

    foreach($sports as $sport => $details): ?>
      <div class="relative rounded-xl overflow-hidden shadow-lg group cursor-pointer hover:scale-105 transition-transform">
        <!-- Card Background Image -->
        <div class="absolute inset-0 bg-cover bg-center brightness-75" 
             style="background-image: url('<?php echo $details['image']; ?>');"></div>
        <!-- Gradient overlay for text -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
        <!-- Card Content -->
        <div class="relative p-6 flex flex-col justify-end h-64">
          <span class="text-3xl"><?php echo $details['icon']; ?></span>
          <h2 class="text-2xl font-bold text-white mt-2"><?php echo $sport; ?></h2>
          <p class="text-gray-200 mt-1 text-sm"><?php echo $details['description']; ?></p>
          <p class="text-gray-300 mt-1 text-xs font-semibold">Venue: <?php echo $details['venue']; ?></p>
        </div>
      </div>
    <?php endforeach; ?>

  </section>

</main>

<?php include 'includes/footer.php'; ?>
