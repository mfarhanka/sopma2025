<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main id="main-content" class="container h-full w-full mx-auto px-4 py-10">
  <h2 class="text-3xl font-bold text-center mb-8">Athletes Directory</h2>

  <!-- Search & Filter -->
  <div class="flex flex-col md:flex-row items-center justify-between mb-6 gap-4">
    <input type="text" placeholder="Search athletes..." 
           class="w-full md:w-1/3 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
           aria-label="Search athletes">
    <select class="px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
            aria-label="Filter by sport">
      <option>All Sports</option>
      <option>Athletics</option>
      <option>Swimming</option>
      <option>Football</option>
      <option>Badminton</option>
    </select>
  </div>

  <!-- Athlete Cards Grid -->
  <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3" role="list">
    <?php
    // Example static data — replace with DB fetch
    $athletes = [
      [
        "id" => 1,
        "name" => "John Lee",
        "sport" => "Athletics – 100m Sprint",
        "bio" => "Representing Malaysia at SOPMA 2025.",
        "image" => "assets/images/althete.png"
      ],
      [
        "id" => 2,
        "name" => "Aisha Rahman",
        "sport" => "Football – Striker",
        "bio" => "Plays for Selangor Deaf FC.",
        "image" => "assets/images/althete.png"
      ],
      [
        "id" => 3,
        "name" => "Nur Farah",
        "sport" => "Swimming – 200m Freestyle",
        "bio" => "National Deaf Swimming Champion.",
        "image" => "assets/images/althete.png"
      ]
    ];

    foreach ($athletes as $athlete): ?>
      <div role="listitem" class="bg-white rounded-xl shadow hover:shadow-lg transition p-5">
        <img src="<?php echo $athlete['image']; ?>" 
             alt="Photo of <?php echo $athlete['name']; ?>" 
             class="w-full h-48 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-semibold"><?php echo $athlete['name']; ?></h3>
        <p class="text-sm text-gray-600"><?php echo $athlete['sport']; ?></p>
        <p class="text-gray-700 mt-2"><?php echo $athlete['bio']; ?></p>
        <a href="athlete-profile.php?id=<?php echo $athlete['id']; ?>" 
           class="mt-3 inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
          View Profile
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
