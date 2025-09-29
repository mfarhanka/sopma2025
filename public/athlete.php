<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>
<?php include 'includes/breadcrumb.php'; ?>


<main class="max-w-7xl mx-auto px-4 py-12">

  <!-- Hero Section -->
  <section class="text-center mb-12">
    <h1 class="text-4xl font-bold text-blue-700 mb-4">🏅 Meet the Athletes</h1>
    <p class="text-lg text-gray-600">Discover the amazing athletes participating in SOPMA XXII Sarawak 2025.</p>
  </section>

  <!-- Search + Filter -->
  <section class="mb-10">
    <form class="flex flex-col md:flex-row gap-4 justify-center">
      <input type="text" placeholder="Search athlete by name..." 
        class="w-full md:w-1/3 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500"
        aria-label="Search athlete by name">

      <select class="w-full md:w-1/4 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500" aria-label="Filter by sport">
        <option>All Sports</option>
        <option>Badminton</option>
        <option>Futsal</option>
        <option>Athletics</option>
        <!-- More sports -->
      </select>

      <select class="w-full md:w-1/4 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500" aria-label="Filter by state">
        <option>All States</option>
        <option>FTDeaf</option>
        <option>JSDeaf</option>
        <option>SelSDeaf</option>
        <!-- More -->
      </select>

      <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Filter</button>
    </form>
  </section>

  <!-- Athletes Grid -->
  <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
    
    <!-- Athlete Card -->
    <div class="bg-white shadow-lg rounded-xl overflow-hidden border hover:shadow-xl transition">
      <img src="assets/images/athletes/athlete1.jpg" alt="Athlete photo" class="w-full h-48 object-cover">
      <div class="p-4">
        <h2 class="text-xl font-bold text-gray-800">Aiman Rahman</h2>
        <p class="text-gray-600">🏸 Badminton | SelSDeaf</p>
        <div class="flex items-center gap-2 mt-2">
          <span class="bg-yellow-400 text-white text-sm px-2 py-1 rounded-full">🥇 2 Gold</span>
          <span class="bg-gray-400 text-white text-sm px-2 py-1 rounded-full">🥈 1 Silver</span>
        </div>
        <a href="athlete-detail.php" class="block mt-4 text-blue-600 font-semibold hover:underline">View Profile →</a>
      </div>
    </div>

    <!-- Repeat Athlete Cards dynamically with PHP loop -->

  </div>
</main>

<?php include 'includes/footer.php'; ?>
