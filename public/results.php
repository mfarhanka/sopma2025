<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>
<?php include 'includes/breadcrumb.php'; ?>


<main class="bg-gray-50 min-h-screen py-10">
  <!-- Hero Banner -->
  <section class="max-w-7xl mx-auto px-4 lg:px-8 mb-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
      <div>
        <h1 class="text-4xl font-bold text-indigo-800 mb-4">
          SOPMA XXII Sarawak 2025 – Results
        </h1>
        <p class="text-lg text-gray-700">
          Stay updated with the latest results for all sports. 
          Check match outcomes, medal standings, and highlights 
          from <span class="font-semibold">Futsal, Badminton, Athletics, and more</span>.
        </p>
      </div>
      <div>
        <img src="assets/images/results-hero.jpg" alt="Athletes celebrating victory" 
             class="rounded-2xl shadow-md w-full h-64 object-cover">
      </div>
    </div>
  </section>

  <!-- Filter/Search -->
  <section class="max-w-7xl mx-auto px-4 lg:px-8 mb-8">
    <div class="bg-white shadow rounded-lg p-4 flex flex-col md:flex-row items-center justify-between gap-4">
      <div class="flex gap-4 w-full md:w-auto">
        <select class="px-4 py-2 rounded-lg border border-gray-300 text-gray-700 w-full md:w-auto">
          <option value="">All Sports</option>
          <option value="futsal">Futsal</option>
          <option value="badminton">Badminton</option>
          <option value="athletics">Athletics</option>
          <option value="swimming">Swimming</option>
        </select>
        <select class="px-4 py-2 rounded-lg border border-gray-300 text-gray-700 w-full md:w-auto">
          <option value="">All Dates</option>
          <option value="2025-10-02">2 Oct 2025</option>
          <option value="2025-10-03">3 Oct 2025</option>
          <option value="2025-10-04">4 Oct 2025</option>
        </select>
      </div>
      <div class="relative w-full md:w-64">
        <input type="text" placeholder="Search team or athlete..." 
               class="pl-10 pr-4 py-2 w-full border rounded-lg focus:ring-2 focus:ring-indigo-500">
        <span class="absolute left-3 top-2.5 text-gray-400">
          🔍
        </span>
      </div>
    </div>
  </section>

  <!-- Medal Summary -->
  <section class="max-w-7xl mx-auto px-4 lg:px-8 mb-12">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Medal Summary</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="bg-white rounded-xl shadow p-6 text-center">
        <p class="text-lg font-semibold text-yellow-500">Gold</p>
        <p class="text-3xl font-bold text-gray-800">15</p>
      </div>
      <div class="bg-white rounded-xl shadow p-6 text-center">
        <p class="text-lg font-semibold text-gray-500">Silver</p>
        <p class="text-3xl font-bold text-gray-800">12</p>
      </div>
      <div class="bg-white rounded-xl shadow p-6 text-center">
        <p class="text-lg font-semibold text-amber-700">Bronze</p>
        <p class="text-3xl font-bold text-gray-800">8</p>
      </div>
      <div class="bg-white rounded-xl shadow p-6 text-center">
        <p class="text-lg font-semibold text-indigo-600">Total</p>
        <p class="text-3xl font-bold text-gray-800">35</p>
      </div>
    </div>
  </section>

  <!-- Results Table -->
  <section class="max-w-7xl mx-auto px-4 lg:px-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Latest Results</h2>
    <div class="overflow-x-auto bg-white rounded-xl shadow">
      <table class="w-full text-left border-collapse">
        <thead class="bg-indigo-600 text-white">
          <tr>
            <th class="p-4">Sport</th>
            <th class="p-4">Match</th>
            <th class="p-4">Date</th>
            <th class="p-4">Venue</th>
            <th class="p-4">Result</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example Row -->
          <tr class="border-b hover:bg-gray-50 focus-within:bg-indigo-50">
            <td class="p-4">Futsal</td>
            <td class="p-4">Selangor Deaf vs Johor Deaf</td>
            <td class="p-4">2 Oct 2025</td>
            <td class="p-4">Kuching Indoor Stadium</td>
            <td class="p-4 font-semibold text-green-600">2 - 1</td>
          </tr>
          <tr class="border-b hover:bg-gray-50">
            <td class="p-4">Badminton</td>
            <td class="p-4">Penang Deaf vs KL Deaf</td>
            <td class="p-4">3 Oct 2025</td>
            <td class="p-4">Sarawak Sports Complex</td>
            <td class="p-4 font-semibold text-blue-600">21-19, 18-21, 21-17</td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="p-4">Athletics</td>
            <td class="p-4">100m Final – Men</td>
            <td class="p-4">4 Oct 2025</td>
            <td class="p-4">Sarawak Stadium</td>
            <td class="p-4 font-semibold text-yellow-600">Gold – Perak Deaf</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
