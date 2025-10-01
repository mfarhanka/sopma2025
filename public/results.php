<?php 
include 'includes/header.php'; 
include 'includes/nav.php'; 
include 'includes/breadcrumb.php'; 

// Database connection
$pdo = new PDO("mysql:host=localhost;dbname=sopma2025","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Fetch medal standings
$medals = $pdo->query("SELECT *, (gold+silver+bronze) AS total FROM medal_tally ORDER BY total DESC")->fetchAll(PDO::FETCH_ASSOC);

// Fetch match results
$results = $pdo->query("SELECT r.*, s.name AS sport_name, s.venue AS sport_venue 
                        FROM results r 
                        LEFT JOIN sports s ON r.sport_id = s.id
                        ORDER BY r.match_date ASC")->fetchAll(PDO::FETCH_ASSOC);
?>

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
          from <span class="font-semibold">Badminton, Athletics, Futsal, Orienteering, Bowling</span>.
        </p>
        <p class="text-sm text-gray-500 mt-2">
          2 – 6 October 2025 · Kuching, Sarawak | Last updated: <?= date('d M Y') ?>
        </p>
      </div>
      <div>
        <img src="assets/images/sport-hero.png" alt="Athletes celebrating victory" 
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
          <option value="orienteering">Orienteering</option>
          <option value="bowling">Bowling</option>
        </select>
        <select class="px-4 py-2 rounded-lg border border-gray-300 text-gray-700 w-full md:w-auto">
          <option value="">All Dates</option>
          <?php
          // Generate date options dynamically from results
          $dates = array_unique(array_map(fn($r) => $r['match_date'], $results));
          sort($dates);
          foreach($dates as $date){
              echo "<option value='{$date}'>".date('d M Y', strtotime($date))."</option>";
          }
          ?>
        </select>
      </div>
      <div class="relative w-full md:w-64">
        <input type="text" placeholder="Search team or athlete..." 
               class="pl-10 pr-4 py-2 w-full border rounded-lg focus:ring-2 focus:ring-indigo-500">
        <span class="absolute left-3 top-2.5 text-gray-400">
          <i class="fas fa-search"></i>
        </span>
      </div>
    </div>
  </section>

  <!-- Medal Summary -->
  <section class="max-w-7xl mx-auto px-4 lg:px-8 mb-12">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Medal Summary</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php
      $totalGold = array_sum(array_column($medals, 'gold'));
      $totalSilver = array_sum(array_column($medals, 'silver'));
      $totalBronze = array_sum(array_column($medals, 'bronze'));
      $totalAll = $totalGold + $totalSilver + $totalBronze;
      ?>
      <div class="bg-white rounded-xl shadow p-6 text-center">
        <p class="text-lg font-semibold text-yellow-500">Gold</p>
        <p class="text-3xl font-bold text-gray-800"><?= $totalGold ?></p>
      </div>
      <div class="bg-white rounded-xl shadow p-6 text-center">
        <p class="text-lg font-semibold text-gray-500">Silver</p>
        <p class="text-3xl font-bold text-gray-800"><?= $totalSilver ?></p>
      </div>
      <div class="bg-white rounded-xl shadow p-6 text-center">
        <p class="text-lg font-semibold text-amber-700">Bronze</p>
        <p class="text-3xl font-bold text-gray-800"><?= $totalBronze ?></p>
      </div>
      <div class="bg-white rounded-xl shadow p-6 text-center">
        <p class="text-lg font-semibold text-indigo-600">Total</p>
        <p class="text-3xl font-bold text-gray-800"><?= $totalAll ?></p>
      </div>
    </div>
  </section>

  <!-- Results Table -->
  <section class="max-w-7xl mx-auto px-4 lg:px-8 mb-12">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Latest Results</h2>

    <!-- Desktop Table -->
    <div class="hidden md:block overflow-x-auto bg-white rounded-xl shadow">
      <table class="w-full text-left border-collapse">
        <thead class="bg-indigo-600 text-white">
          <tr>
            <th class="p-4">Sport</th>
            <th class="p-4">Match/Event</th>
            <th class="p-4"><i class="fas fa-calendar-alt mr-1"></i>Date</th>
            <th class="p-4"><i class="fas fa-map-marker-alt mr-1"></i>Venue</th>
            <th class="p-4"><i class="fas fa-trophy mr-1"></i>🥇</th>
            <th class="p-4 text-center">🥈</th>
            <th class="p-4 text-center">🥉</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($results as $r): ?>
          <tr class="border-b hover:bg-gray-50 transition">
            <td class="p-4 flex items-center"><?= $r['sport_name'] ?></td>
            <td class="p-4"><?= $r['event_name'] ?></td>
            <td class="p-4"><?= date('d M Y', strtotime($r['match_date'])) ?></td>
            <td class="p-4"><?= $r['sport_venue'] ?></td>
            <td class="p-4 text-yellow-600 font-bold"><?= $r['gold'] ?></td>
            <td class="p-4 text-gray-500 font-bold"><?= $r['silver'] ?></td>
            <td class="p-4 text-amber-700 font-bold"><?= $r['bronze'] ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Mobile Cards -->
    <div class="md:hidden space-y-4">
      <?php foreach($results as $r): ?>
      <div class="bg-white rounded-lg shadow-lg border border-slate-200 p-4">
        <h3 class="font-bold text-lg text-blue-800 mb-2"><?= $r['sport_name'] ?></h3>
        <p class="text-slate-600 text-sm mb-1"><strong>Event:</strong> <?= $r['event_name'] ?></p>
        <p class="text-slate-600 text-sm mb-1"><strong>Venue:</strong> <?= $r['sport_venue'] ?></p>
        <p class="text-slate-600 text-sm mb-2"><strong>Date:</strong> <?= date('d M Y', strtotime($r['match_date'])) ?></p>
        <div class="flex justify-between font-semibold text-slate-800">
          <span class="text-yellow-600 font-bold">🥇 <?= $r['gold'] ?></span>
          <span class="text-gray-500 font-bold">🥈 <?= $r['silver'] ?></span>
          <span class="text-amber-700 font-bold">🥉 <?= $r['bronze'] ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </section>
</main>

<?php include 'includes/footer.php'; ?>
