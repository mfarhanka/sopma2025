<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>
<?php include 'includes/breadcrumb.php'; ?>


<section class="relative bg-gradient-to-r from-[#FF7C27] to-[#E4221C] text-white">
  <div class="container mx-auto px-4 py-12 lg:py-20 flex flex-col lg:flex-row items-center gap-8">

    <!-- Left: Hero Image -->
    <div class="lg:w-1/2 text-center lg:text-left">
      <img 
        src="assets/images/hero.png" 
        alt="Mascot welcoming athletes to SOPMA XXII Sarawak 2025" 
        class="mx-auto lg:mx-0 max-w-sm md:max-w-md drop-shadow-2xl rounded-xl border-4 border-[#FFD23A]"
      >
      <figcaption class="mt-4 text-sm text-[#D7D7D7] italic">
        Mascot of SOPMA XXII welcoming athletes and fans
      </figcaption>
    </div>

    <!-- Right: Hero Text -->
    <div class="lg:w-1/2 text-center lg:text-left">
      <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight">
        <span class="block">WELCOME TO</span>
        <span class="block text-[#FFD23A] drop-shadow-lg">SOPMA XXII SARAWAK 2025</span>
      </h1>
      <p class="mt-4 text-lg md:text-xl text-gray-100">
        The official information website for the 
        <strong class="text-[#FFD23A]">Malaysian Deaf Sports Games</strong> happening on 
        <span class="font-semibold text-white">2 – 7 October 2025</span> in Kuching, Sarawak.
      </p>
      <p class="mt-2 text-sm text-gray-200">
        Accessible updates, schedules, venues, and results — designed with the Deaf community in mind.
      </p>

      <!-- CTA Buttons -->
      <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center lg:justify-start">
        <a href="schedule.php" 
           class="px-6 py-3 bg-[#FFD23A] text-[#1A3A4C] font-semibold rounded-lg shadow hover:bg-[#FF7C27] hover:text-white focus:ring-4 focus:ring-[#FFD23A] focus:outline-none transition">
          📅 View Schedule
        </a>
        <a href="results.php" 
           class="px-6 py-3 bg-white text-[#1A3A4C] font-semibold rounded-lg shadow hover:bg-gray-100 focus:ring-4 focus:ring-white focus:outline-none transition">
          🏆 Live Results
        </a>
      </div>
    </div>

  </div>
</section>

</section>
<main class="container mx-auto px-4 py-8">
  <!-- Title -->
<section class="text-center mb-8">
  <h1 class="text-3xl md:text-4xl font-extrabold text-blue-900 mb-2">
    SOPMA 2025 Schedule
  </h1>
  <p class="text-blue-700">2 – 7 October 2025 · Kuching, Sarawak</p>
  <p class="text-sm text-gray-500">Last updated: 9 Sept 2025</p>
</section>

<!-- Desktop Schedule Table -->
<div class="hidden md:block overflow-x-auto">
  <table class="w-full border-collapse border border-blue-200 text-sm rounded-lg shadow-lg">
    <thead class="bg-gradient-to-r from-blue-800 to-blue-600 text-white">
      <tr>
        <th class="border border-blue-200 px-4 py-3 text-left font-semibold">Event / Venue</th>
        <th class="border border-blue-200 px-4 py-3">1/10 Wed</th>
        <th class="border border-blue-200 px-4 py-3">2/10 Thu</th>
        <th class="border border-blue-200 px-4 py-3">3/10 Fri</th>
        <th class="border border-blue-200 px-4 py-3">4/10 Sat</th>
        <th class="border border-blue-200 px-4 py-3">5/10 Sun</th>
        <th class="border border-blue-200 px-4 py-3">6/10 Mon</th>
        <th class="border border-blue-200 px-4 py-3">7/10 Tue</th>
      </tr>
    </thead>
    <tbody class="bg-white">
      <!-- Row: Arrival / Departure -->
      <tr class="hover:bg-blue-50 focus-within:bg-blue-100 transition">
        <td class="border px-4 py-3 font-medium text-blue-900">Arrival / Departure</td>
        <td class="border px-4 py-3">✈️🚌</td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3">✈️🚌</td>
      </tr>
      <!-- Row: Technical Meeting -->
      <tr class="hover:bg-blue-50 focus-within:bg-blue-100 transition">
        <td class="border px-4 py-3 font-medium text-blue-900">Technical Meeting</td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3">👥</td>
        <td class="border px-4 py-3">👥</td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
      </tr>
      <!-- Row: Opening Ceremony -->
      <tr class="hover:bg-blue-50 focus-within:bg-blue-100 transition">
        <td class="border px-4 py-3 font-medium text-blue-900">
          Opening Ceremony<br>
          <span class="text-xs text-gray-500">Hikmah Exchange Event Centre</span>
        </td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3">🎉</td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
      </tr>
      <!-- Row: Closing Ceremony -->
      <tr class="hover:bg-blue-50 focus-within:bg-blue-100 transition">
        <td class="border px-4 py-3 font-medium text-blue-900">
          Closing Ceremony<br>
          <span class="text-xs text-gray-500">Imperial Hotel Kuching</span>
        </td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3">🎉</td>
        <td class="border px-4 py-3"></td>
      </tr>
      <!-- Row: Badminton -->
      <tr class="hover:bg-blue-50 focus-within:bg-blue-100 transition">
        <td class="border px-4 py-3 font-medium text-blue-900">
          Badminton<br>
          <span class="text-xs text-gray-500">Arena Sukan Kuching</span>
        </td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3">🏸 L</td>
        <td class="border px-4 py-3">🏸 G</td>
        <td class="border px-4 py-3">🏸 G</td>
        <td class="border px-4 py-3">🏸 G</td>
        <td class="border px-4 py-3">🏸 G</td>
        <td class="border px-4 py-3"></td>
      </tr>
      <!-- Row: Futsal -->
      <tr class="hover:bg-blue-50 focus-within:bg-blue-100 transition">
        <td class="border px-4 py-3 font-medium text-blue-900">
          Futsal<br>
          <span class="text-xs text-gray-500">Indoor Stadium Kota Samarahan</span>
        </td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3">⚽ L</td>
        <td class="border px-4 py-3">⚽ G</td>
        <td class="border px-4 py-3">⚽ G</td>
        <td class="border px-4 py-3">⚽ G</td>
        <td class="border px-4 py-3">⚽ G</td>
        <td class="border px-4 py-3"></td>
      </tr>
      <!-- Row: Athletics -->
      <tr class="hover:bg-blue-50 focus-within:bg-blue-100 transition">
        <td class="border px-4 py-3 font-medium text-blue-900">
          Athletics<br>
          <span class="text-xs text-gray-500">Stadium Sarawak</span>
        </td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3">🏃 L</td>
        <td class="border px-4 py-3">🏃 G</td>
        <td class="border px-4 py-3">🏃 G</td>
        <td class="border px-4 py-3">🏃 G</td>
        <td class="border px-4 py-3">🏃 G</td>
        <td class="border px-4 py-3"></td>
      </tr>
      <!-- Row: Orienteering -->
      <tr class="hover:bg-blue-50 focus-within:bg-blue-100 transition">
        <td class="border px-4 py-3 font-medium text-blue-900">
          Orienteering<br>
          <span class="text-xs text-gray-500">Sama Jaya Forest Park</span>
        </td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3">🧭 L</td>
        <td class="border px-4 py-3">🧭 G</td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3">🧭 G</td>
        <td class="border px-4 py-3"></td>
      </tr>
      <!-- Row: Bowling -->
      <tr class="hover:bg-blue-50 focus-within:bg-blue-100 transition">
        <td class="border px-4 py-3 font-medium text-blue-900">
          Tenpin Bowling<br>
          <span class="text-xs text-gray-500">Megalanes Sarawak</span>
        </td>
        <td class="border px-4 py-3"></td>
        <td class="border px-4 py-3">🎳 L</td>
        <td class="border px-4 py-3">🎳 G</td>
        <td class="border px-4 py-3">🎳 G</td>
        <td class="border px-4 py-3">🎳 G</td>
        <td class="border px-4 py-3">🎳 G</td>
        <td class="border px-4 py-3"></td>
      </tr>
    </tbody>
  </table>
</div>

  <!-- Mobile Accordion -->
  <div class="md:hidden space-y-4">
  <?php
  $days = [
    "1/10 Wed" => ["Arrival / Departure" => "✈️🚌"],
    "2/10 Thu" => ["Technical Meeting" => "👥", "Opening Ceremony" => "🎉", "Badminton" => "🏸 L", "Futsal" => "⚽ L", "Athletics" => "🏃 L", "Bowling" => "🎳 L"],
    "3/10 Fri" => ["Technical Meeting" => "👥", "Badminton" => "🏸 G", "Futsal" => "⚽ G", "Athletics" => "🏃 G", "Orienteering" => "🧭 L", "Bowling" => "🎳 G"],
    "4/10 Sat" => ["Badminton" => "🏸 G", "Futsal" => "⚽ G", "Athletics" => "🏃 G", "Orienteering" => "🧭 G", "Bowling" => "🎳 G"],
    "5/10 Sun" => ["Badminton" => "🏸 G", "Futsal" => "⚽ G", "Athletics" => "🏃 G", "Bowling" => "🎳 G"],
    "6/10 Mon" => ["Closing Ceremony" => "🎉", "Badminton" => "🏸 G", "Futsal" => "⚽ G", "Athletics" => "🏃 G", "Orienteering" => "🧭 G", "Bowling" => "🎳 G"],
    "7/10 Tue" => ["Arrival / Departure" => "✈️🚌"]
  ];

  foreach ($days as $day => $events): ?>
    <details class="bg-gradient-to-r from-blue-50 to-blue-100 shadow rounded-xl p-4 transition duration-200 hover:shadow-md focus-within:ring-2 focus-within:ring-blue-400">
      <summary class="font-bold text-blue-900 cursor-pointer flex items-center justify-between">
        <span><?php echo $day; ?></span>
        <span class="text-blue-600 ml-2">+</span>
      </summary>
      <ul class="mt-3 space-y-2 text-blue-800">
        <?php foreach ($events as $event => $icon): ?>
          <li class="flex justify-between border-b border-blue-200 pb-1">
            <span class="font-medium"><?php echo $event; ?></span>
            <span class="text-lg"><?php echo $icon; ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    </details>
  <?php endforeach; ?>
</div>

<!-- Legend -->
<div class="mt-8 text-sm text-blue-700 bg-blue-50 border border-blue-200 rounded-lg p-3 shadow-sm">
  <p><strong class="text-blue-900">L</strong> = Training | <strong class="text-blue-900">G</strong> = Games / Competition</p>
</div>

</main>

<?php
$associations = [
  ["name" => "FTDeaf", "logo" => "images/ftdeaf.png", "details" => "Federal Territory Deaf Sports Association.", "athletes" => 45],
  ["name" => "JSDeaf", "logo" => "images/jsdeaf.png", "details" => "Johor Deaf Sports Association.", "athletes" => 60],
  ["name" => "KelSDeaf", "logo" => "images/kelsdeaf.png", "details" => "Kelantan Deaf Sports Association.", "athletes" => 40],
  ["name" => "KSDeaf", "logo" => "images/ksdeaf.png", "details" => "Kedah Deaf Sports Association.", "athletes" => 38],
  ["name" => "MaSDeaf", "logo" => "images/masdeaf.png", "details" => "Sarawak Deaf Sports Association, host of SOPMA 2025.", "athletes" => 75, "host" => true],
  ["name" => "NsSDeaf", "logo" => "images/nssdeaf.png", "details" => "Negeri Sembilan Deaf Sports Association.", "athletes" => 42],
  ["name" => "PesDeaf", "logo" => "images/pesdeaf.png", "details" => "Perlis Deaf Sports Association.", "athletes" => 25],
  ["name" => "PhSDeaf", "logo" => "images/phsdeaf.png", "details" => "Pahang Deaf Sports Association.", "athletes" => 50],
  ["name" => "PrSDeaf", "logo" => "images/prsdeaf.png", "details" => "Perak Deaf Sports Association.", "athletes" => 55],
  ["name" => "PSDeaf", "logo" => "images/psdeaf.png", "details" => "Pulau Pinang Deaf Sports Association.", "athletes" => 48],
  ["name" => "SDeafSA", "logo" => "images/sdeafsa.png", "details" => "Sabah Deaf Sports Association.", "athletes" => 62],
  ["name" => "SelSDeaf", "logo" => "images/selsdeaf.png", "details" => "Selangor Deaf Sports Association.", "athletes" => 80],
  ["name" => "SSDeaf", "logo" => "images/ssdeaf.png", "details" => "Terengganu Deaf Sports Association.", "athletes" => 44],
  ["name" => "TSDeaf", "logo" => "images/tsdeaf.png", "details" => "Melaka Deaf Sports Association.", "athletes" => 36],
];
?>

<section class="max-w-7xl mx-auto px-4 py-12">
  <!-- Title -->
  <div class="text-center mb-10">
    <h2 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-indigo-600 via-purple-600 to-teal-500 bg-clip-text text-transparent">
      Malaysian Deaf Sports Associations
    </h2>
    <p class="mt-2 text-slate-600">14 Deaf State Associations competing in SOPMA XXII Sarawak 2025</p>
  </div>

  <!-- Controls -->
  <div class="flex flex-col md:flex-row items-center justify-between mb-6 gap-4">
    <input id="searchBar" 
           type="text" 
           placeholder="🔍 Search association..." 
           class="w-full md:w-1/3 px-4 py-2 border border-slate-300 rounded-lg shadow-sm 
                  focus:ring-2 focus:ring-teal-500 focus:border-teal-500 focus:outline-none transition">

    <select id="sortSelect" 
            class="w-full md:w-1/4 px-4 py-2 border border-slate-300 rounded-lg shadow-sm 
                   focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none transition">
      <option value="nameAsc">Sort: A → Z</option>
      <option value="nameDesc">Sort: Z → A</option>
      <option value="athletesHigh">Most Athletes</option>
      <option value="athletesLow">Fewest Athletes</option>
    </select>
  </div>

  <!-- Charts -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
    <div class="bg-gradient-to-br from-white to-slate-50 shadow-xl rounded-2xl p-6 border border-indigo-100">
      <h3 class="text-lg font-semibold text-indigo-700 mb-4">Athletes by Association</h3>
      <canvas id="athleteBarChart" aria-label="Athlete numbers by association (bar chart)" role="img"></canvas>
    </div>
    <div class="bg-gradient-to-br from-white to-slate-50 shadow-xl rounded-2xl p-6 border border-teal-100">
      <h3 class="text-lg font-semibold text-teal-700 mb-4">Athlete Representation (%)</h3>
      <canvas id="athletePieChart" aria-label="Athlete numbers by association (pie chart)" role="img"></canvas>
    </div>
  </div>

  <!-- Grid -->
  <div id="associationGrid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6"></div>
</section>
<?php
// ✅ Deaf Associations with details + athlete counts
$associations = [
  ["name" => "FTDeaf", "logo" => "assets/images/FTSDeaf.jpg", "details" => "Federal Territory Deaf Sports Association.", "athletes" => 45],
  ["name" => "JSDeaf", "logo" => "assets/images/JSDeaf.jpg", "details" => "Johor Deaf Sports Association.", "athletes" => 60],
  ["name" => "KelSDeaf", "logo" => "assets/images/KelSDeaf.jpg", "details" => "Kelantan Deaf Sports Association.", "athletes" => 40],
  ["name" => "KSDeaf", "logo" => "assets/images/KSDeaf.jpg", "details" => "Kedah Deaf Sports Association.", "athletes" => 38],
  ["name" => "MaSDeaf", "logo" => "assets/images/MaSDeaf.jpg", "details" => "Sarawak Deaf Sports Association, host of SOPMA 2025.", "athletes" => 75, "host" => true],
  ["name" => "NsSDeaf", "logo" => "assets/images/NsSDeaf.jpg", "details" => "Negeri Sembilan Deaf Sports Association.", "athletes" => 42],
  ["name" => "PesDeaf", "logo" => "assets/images/PeSDeaf.jpg", "details" => "Perlis Deaf Sports Association.", "athletes" => 25],
  ["name" => "PhSDeaf", "logo" => "assets/images/PhSDeaf.jpg", "details" => "Pahang Deaf Sports Association.", "athletes" => 50],
  ["name" => "PrSDeaf", "logo" => "assets/images/PrSDeaf.jpg", "details" => "Perak Deaf Sports Association.", "athletes" => 55],
  ["name" => "PSDeaf", "logo" => "assets/images/PSDeaf.jpg", "details" => "Pulau Pinang Deaf Sports Association.", "athletes" => 48],
  ["name" => "SDeafSA", "logo" => "assets/images/SDeafSA.jpg", "details" => "Sabah Deaf Sports Association.", "athletes" => 62],
  ["name" => "SelSDeaf", "logo" => "assets/images/SelSDeaf.jpg", "details" => "Selangor Deaf Sports Association.", "athletes" => 80],
  ["name" => "SSDeaf", "logo" => "assets/images/SSDeaf.jpg", "details" => "Terengganu Deaf Sports Association.", "athletes" => 44],
  ["name" => "TSDeaf", "logo" => "assets/images/TSDeaf.jpg", "details" => "Melaka Deaf Sports Association.", "athletes" => 36],
];
?>



<!-- Medal Standings -->
<section class="max-w-6xl mx-auto px-4 py-12">
  <!-- Title -->
  <div class="text-center mb-8">
    <h2 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-yellow-500 via-amber-600 to-orange-600 bg-clip-text text-transparent">
      Medal Standings
    </h2>
    <p class="mt-2 text-slate-600">🏅 Live updates during SOPMA XXII</p>
  </div>

  <!-- Table -->
  <div class="overflow-x-auto">
    <table class="min-w-full border border-slate-200 divide-y divide-slate-200 text-sm text-center rounded-xl overflow-hidden shadow-lg">
      <!-- Header -->
      <thead class="bg-gradient-to-r from-slate-50 to-slate-100">
        <tr>
          <th class="px-4 py-3 font-semibold text-slate-700">Country</th>
          <th class="px-4 py-3 font-semibold text-yellow-600">🥇 Gold</th>
          <th class="px-4 py-3 font-semibold text-gray-500">🥈 Silver</th>
          <th class="px-4 py-3 font-semibold text-amber-700">🥉 Bronze</th>
          <th class="px-4 py-3 font-semibold text-indigo-700">Total</th>
        </tr>
      </thead>

      <!-- Body -->
      <tbody class="divide-y divide-slate-100">
        <tr class="hover:bg-yellow-50 transition">
          <td class="px-4 py-3 font-medium text-slate-800">Malaysia</td>
          <td class="px-4 py-3 font-bold text-yellow-600">12</td>
          <td class="px-4 py-3 font-bold text-gray-500">8</td>
          <td class="px-4 py-3 font-bold text-amber-700">5</td>
          <td class="px-4 py-3 font-extrabold text-indigo-700">25</td>
        </tr>
        <tr class="bg-slate-50 hover:bg-indigo-50 transition">
          <td class="px-4 py-3 font-medium text-slate-800">Indonesia</td>
          <td class="px-4 py-3 font-bold text-yellow-600">9</td>
          <td class="px-4 py-3 font-bold text-gray-500">10</td>
          <td class="px-4 py-3 font-bold text-amber-700">7</td>
          <td class="px-4 py-3 font-extrabold text-indigo-700">26</td>
        </tr>
        <!-- Add more rows -->
      </tbody>
    </table>
  </div>
</section>
<!-- Live / Recent Match Results -->
<section class="py-12 bg-gradient-to-b from-blue-50 to-white" id="live-results">
  <div class="container mx-auto px-4">

    <!-- Title -->
    <div class="text-center mb-10">
      <h2 class="text-3xl md:text-4xl font-extrabold text-blue-900 tracking-tight">
        Live & Recent Match Results
      </h2>
      <p class="mt-2 text-gray-600 text-lg">⚡ Updated scores from SOPMA XXII Sarawak 2025</p>
    </div>

    <?php
    $matches = [
      [
        "sport" => "Futsal",
        "icon" => "fas fa-futbol",
        "venue" => "Indoor Stadium Kota Samarahan",
        "date" => "2 Oct 2025",
        "team1" => "FTDeaf",
        "score1" => 3,
        "team2" => "SelSDeaf",
        "score2" => 2
      ],
      [
        "sport" => "Badminton",
        "icon" => "fas fa-table-tennis",
        "venue" => "Arena Sukan Kuching",
        "date" => "3 Oct 2025",
        "team1" => "NSDeaf",
        "score1" => 2,
        "team2" => "KelSDeaf",
        "score2" => 1
      ],
      [
        "sport" => "Bowling",
        "icon" => "fas fa-bowling-ball",
        "venue" => "Megalanes Sarawak",
        "date" => "4 Oct 2025",
        "team1" => "PrSDeaf",
        "score1" => 500,
        "team2" => "TSDeaf",
        "score2" => 480
      ],
    ];
    ?>

    <!-- Desktop Table -->
    <div class="hidden md:block overflow-x-auto shadow-xl rounded-lg border border-slate-200">
      <table class="w-full border-collapse text-sm md:text-base">
        <thead class="bg-gradient-to-r from-blue-700 to-blue-900 text-white">
          <tr>
            <th class="px-4 py-3 text-left">Sport</th>
            <th class="px-4 py-3 text-left">Venue</th>
            <th class="px-4 py-3 text-left">Date</th>
            <th class="px-4 py-3 text-center">Match</th>
            <th class="px-4 py-3 text-center">Result</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-slate-200">
          <?php foreach ($matches as $m): ?>
            <tr class="hover:bg-blue-50 transition">
              <td class="px-4 py-3 font-medium text-slate-800">
                <i class="<?php echo $m['icon']; ?> text-blue-600"></i> <?php echo $m['sport']; ?>
              </td>
              <td class="px-4 py-3 text-slate-600"><?php echo $m['venue']; ?></td>
              <td class="px-4 py-3 text-slate-600"><?php echo $m['date']; ?></td>
              <td class="px-4 py-3 text-center font-medium text-slate-800">
                <?php echo $m['team1']; ?> <span class="text-blue-500">vs</span> <?php echo $m['team2']; ?>
              </td>
              <td class="px-4 py-3 text-center font-bold text-blue-900">
                <span class="px-3 py-1 bg-blue-100 rounded-lg">
                  <?php echo $m['score1']; ?> - <?php echo $m['score2']; ?>
                </span>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Mobile Cards -->
    <div class="md:hidden space-y-4">
      <?php foreach ($matches as $m): ?>
        <div class="bg-white rounded-lg shadow-lg border border-slate-200 p-4">
          <h3 class="font-bold text-lg text-blue-800 mb-2 flex items-center gap-2">
            <i class="<?php echo $m['icon']; ?> text-blue-600"></i> <?php echo $m['sport']; ?>
          </h3>
          <p class="text-slate-600 text-sm mb-1"><strong class="text-slate-700">Venue:</strong> <?php echo $m['venue']; ?></p>
          <p class="text-slate-600 text-sm mb-3"><strong class="text-slate-700">Date:</strong> <?php echo $m['date']; ?></p>
          <div class="flex justify-between items-center font-semibold text-slate-800">
            <span><?php echo $m['team1']; ?></span>
            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-lg shadow-sm">
              <?php echo $m['score1']; ?> - <?php echo $m['score2']; ?>
            </span>
            <span><?php echo $m['team2']; ?></span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<?php include 'parnter.php'; ?>
<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- JS for Modals -->
<script>
  function openModal(index) {
    document.getElementById("modal-" + index).classList.remove("hidden");
  }
  function closeModal(index) {
    document.getElementById("modal-" + index).classList.add("hidden");
  }

const associations = <?php echo json_encode($associations); ?>;
  const grid = document.getElementById("associationGrid");
  const searchBar = document.getElementById("searchBar");
  const sortSelect = document.getElementById("sortSelect");

  // Bar chart setup
  const ctxBar = document.getElementById("athleteBarChart");
  const barChart = new Chart(ctxBar, {
    type: "bar",
    data: {
      labels: associations.map(a => a.name),
      datasets: [{
        label: "Number of Athletes",
        data: associations.map(a => a.athletes),
        backgroundColor: "rgba(99, 102, 241, 0.7)",
        borderColor: "rgba(99, 102, 241, 1)",
        borderWidth: 1,
        borderRadius: 6
      }]
    },
    options: {
      responsive: true,
      plugins: { legend: { display: false } },
      scales: {
        y: { beginAtZero: true, title: { display: true, text: "Athletes" } },
        x: { title: { display: true, text: "Associations" } }
      }
    }
  });

  // Pie chart setup
  const ctxPie = document.getElementById("athletePieChart");
  const pieChart = new Chart(ctxPie, {
    type: "doughnut",
    data: {
      labels: associations.map(a => a.name),
      datasets: [{
        label: "Athlete Share",
        data: associations.map(a => a.athletes),
        backgroundColor: [
          "#6366F1","#EC4899","#10B981","#F59E0B","#EF4444",
          "#3B82F6","#8B5CF6","#F97316","#14B8A6","#84CC16",
          "#D946EF","#06B6D4","#EAB308","#0EA5E9"
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: "bottom" },
        tooltip: {
          callbacks: {
            label: (ctx) => `${ctx.label}: ${ctx.raw} Athletes`
          }
        }
      }
    }
  });

  // Grid rendering
  function renderGrid(list) {
    grid.innerHTML = "";
    list.forEach((assoc, index) => {
      grid.innerHTML += `
        <div class="bg-white shadow-lg rounded-xl p-4 flex flex-col items-center hover:scale-105 transition transform cursor-pointer"
             onclick="alert('${assoc.details}')">
          <div class="relative">
            <img src="${assoc.logo}" alt="${assoc.name} Logo"
                 class="w-24 h-16 object-contain rounded-md border">
            ${assoc.host ? `<img src="images/deaf-sports-logo.png" class="absolute -bottom-3 -right-3 w-8 h-8 bg-white rounded-full shadow-md p-1">` : ""}
          </div>
          <h5 class="mt-4 font-semibold text-gray-800">${assoc.name}</h5>
          <p class="text-sm text-gray-500">${assoc.athletes} Athletes</p>
        </div>
      `;
    });
  }

  function filterAndSort() {
    let term = searchBar.value.toLowerCase();
    let filtered = associations.filter(a => a.name.toLowerCase().includes(term));

    switch(sortSelect.value) {
      case "nameAsc": filtered.sort((a,b) => a.name.localeCompare(b.name)); break;
      case "nameDesc": filtered.sort((a,b) => b.name.localeCompare(a.name)); break;
      case "athletesHigh": filtered.sort((a,b) => b.athletes - a.athletes); break;
      case "athletesLow": filtered.sort((a,b) => a.athletes - b.athletes); break;
    }

    renderGrid(filtered);

    // Update charts dynamically
    barChart.data.labels = filtered.map(a => a.name);
    barChart.data.datasets[0].data = filtered.map(a => a.athletes);
    barChart.update();

    pieChart.data.labels = filtered.map(a => a.name);
    pieChart.data.datasets[0].data = filtered.map(a => a.athletes);
    pieChart.update();
  }

  searchBar.addEventListener("input", filterAndSort);
  sortSelect.addEventListener("change", filterAndSort);

  // Initial render
  filterAndSort();
</script>

