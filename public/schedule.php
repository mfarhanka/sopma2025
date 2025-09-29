<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>
<?php include 'includes/breadcrumb.php'; ?>


<main class="container mx-auto px-4 py-8">
  <!-- Title -->
  <section class="text-center mb-8">
    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">SOPMA 2025 Schedule</h1>
    <p class="text-gray-600">2 – 7 October 2025 · Kuching, Sarawak</p>
    <p class="text-sm text-gray-500">Last updated: 9 Sept 2025</p>
  </section>

  <!-- Desktop Schedule Table -->
  <div class="hidden md:block overflow-x-auto">
    <table class="w-full border-collapse border border-gray-300 text-sm">
      <thead class="bg-gray-100">
        <tr>
          <th class="border border-gray-300 px-4 py-2 text-left">Event / Venue</th>
          <th class="border border-gray-300 px-4 py-2">1/10 Wed</th>
          <th class="border border-gray-300 px-4 py-2">2/10 Thu</th>
          <th class="border border-gray-300 px-4 py-2">3/10 Fri</th>
          <th class="border border-gray-300 px-4 py-2">4/10 Sat</th>
          <th class="border border-gray-300 px-4 py-2">5/10 Sun</th>
          <th class="border border-gray-300 px-4 py-2">6/10 Mon</th>
          <th class="border border-gray-300 px-4 py-2">7/10 Tue</th>
        </tr>
      </thead>
      <tbody>
        <!-- Row: Arrival / Departure -->
        <tr>
          <td class="border px-4 py-2 font-medium">Arrival / Departure</td>
          <td class="border px-4 py-2">✈️🚌</td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2">✈️🚌</td>
        </tr>
        <!-- Row: Technical Meeting -->
        <tr>
          <td class="border px-4 py-2 font-medium">Technical Meeting</td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2">👥</td>
          <td class="border px-4 py-2">👥</td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
        </tr>
        <!-- Row: Opening Ceremony -->
        <tr>
          <td class="border px-4 py-2 font-medium">Opening Ceremony<br><span class="text-xs text-gray-500">Hikmah Exchange Event Centre</span></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2">🎉</td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
        </tr>
        <!-- Row: Closing Ceremony -->
        <tr>
          <td class="border px-4 py-2 font-medium">Closing Ceremony<br><span class="text-xs text-gray-500">Imperial Hotel Kuching</span></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2">🎉</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <!-- Row: Badminton -->
        <tr>
          <td class="border px-4 py-2 font-medium">Badminton<br><span class="text-xs text-gray-500">Arena Sukan Kuching</span></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2">🏸 L</td>
          <td class="border px-4 py-2">🏸 G</td>
          <td class="border px-4 py-2">🏸 G</td>
          <td class="border px-4 py-2">🏸 G</td>
          <td class="border px-4 py-2">🏸 G</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <!-- Row: Futsal -->
        <tr>
          <td class="border px-4 py-2 font-medium">Futsal<br><span class="text-xs text-gray-500">Indoor Stadium Kota Samarahan</span></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2">⚽ L</td>
          <td class="border px-4 py-2">⚽ G</td>
          <td class="border px-4 py-2">⚽ G</td>
          <td class="border px-4 py-2">⚽ G</td>
          <td class="border px-4 py-2">⚽ G</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <!-- Row: Athletics -->
        <tr>
          <td class="border px-4 py-2 font-medium">Athletics<br><span class="text-xs text-gray-500">Stadium Sarawak</span></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2">🏃 L</td>
          <td class="border px-4 py-2">🏃 G</td>
          <td class="border px-4 py-2">🏃 G</td>
          <td class="border px-4 py-2">🏃 G</td>
          <td class="border px-4 py-2">🏃 G</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <!-- Row: Orienteering -->
        <tr>
          <td class="border px-4 py-2 font-medium">Orienteering<br><span class="text-xs text-gray-500">Sama Jaya Forest Park</span></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2">🧭 L</td>
          <td class="border px-4 py-2">🧭 G</td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2">🧭 G</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <!-- Row: Bowling -->
        <tr>
          <td class="border px-4 py-2 font-medium">Tenpin Bowling<br><span class="text-xs text-gray-500">Megalanes Sarawak</span></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2">🎳 L</td>
          <td class="border px-4 py-2">🎳 G</td>
          <td class="border px-4 py-2">🎳 G</td>
          <td class="border px-4 py-2">🎳 G</td>
          <td class="border px-4 py-2">🎳 G</td>
          <td class="border px-4 py-2"></td>
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
      <details class="bg-white shadow rounded-lg p-4">
        <summary class="font-semibold text-gray-800 cursor-pointer"><?php echo $day; ?></summary>
        <ul class="mt-2 space-y-2">
          <?php foreach ($events as $event => $icon): ?>
            <li class="flex justify-between border-b pb-1">
              <span><?php echo $event; ?></span>
              <span><?php echo $icon; ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </details>
    <?php endforeach; ?>
  </div>

  <!-- Legend -->
  <div class="mt-8 text-sm text-gray-600">
    <p><strong>L</strong> = Training | <strong>G</strong> = Games / Competition</p>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
