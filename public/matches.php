<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<?php include 'includes/breadcrumb.php'; ?>


<main class="max-w-7xl mx-auto px-4 py-10">
  <!-- Page Title -->
  <h1 class="text-3xl font-bold text-center mb-8 text-blue-700">🏆 Individual Matches</h1>

  <!-- Filter Tabs -->
  <div class="flex justify-center mb-8 space-x-4">
    <button class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">All</button>
    <button class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300">Futsal</button>
    <button class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300">Badminton</button>
    <button class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300">Athletics</button>
  </div>

  <!-- Matches Grid -->
  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Example Match Card -->
    <div class="bg-white shadow-lg rounded-xl p-6 border hover:shadow-xl transition">
      <div class="flex items-center space-x-3 mb-4">
        <img src="icons/futsal.png" alt="Futsal Icon" class="w-8 h-8">
        <h2 class="text-xl font-semibold text-gray-800">Futsal</h2>
      </div>
      <p class="text-sm text-gray-500">📍 Stadium Sarawak | ⏰ 10:00 AM</p>

      <div class="mt-4 flex justify-between items-center">
        <div class="text-center">
          <img src="flags/selangor.png" alt="Selangor Deaf Team" class="w-12 h-12 mx-auto">
          <p class="mt-2 text-gray-700 font-medium">SelSDeaf</p>
        </div>
        <span class="text-gray-500 font-bold">VS</span>
        <div class="text-center">
          <img src="flags/johor.png" alt="Johor Deaf Team" class="w-12 h-12 mx-auto">
          <p class="mt-2 text-gray-700 font-medium">JSDeaf</p>
        </div>
      </div>

      <!-- Result -->
      <div class="mt-6 text-center">
        <span class="px-4 py-2 bg-green-100 text-green-700 font-bold rounded-lg">SelSDeaf Won 3 - 1</span>
      </div>
    </div>

    <!-- Another Match Example -->
    <div class="bg-white shadow-lg rounded-xl p-6 border hover:shadow-xl transition">
      <div class="flex items-center space-x-3 mb-4">
        <img src="icons/badminton.png" alt="Badminton Icon" class="w-8 h-8">
        <h2 class="text-xl font-semibold text-gray-800">Badminton</h2>
      </div>
      <p class="text-sm text-gray-500">📍 Indoor Hall | ⏰ 2:00 PM</p>

      <div class="mt-4 flex justify-between items-center">
        <div class="text-center">
          <img src="flags/penang.png" alt="Penang Deaf Team" class="w-12 h-12 mx-auto">
          <p class="mt-2 text-gray-700 font-medium">PSDeaf</p>
        </div>
        <span class="text-gray-500 font-bold">VS</span>
        <div class="text-center">
          <img src="flags/sarawak.png" alt="Sarawak Deaf Team" class="w-12 h-12 mx-auto">
          <p class="mt-2 text-gray-700 font-medium">SDeafSA</p>
        </div>
      </div>

      <!-- Result -->
      <div class="mt-6 text-center">
        <span class="px-4 py-2 bg-gray-100 text-gray-700 font-bold rounded-lg">Upcoming</span>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
