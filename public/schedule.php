<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>
<?php include 'includes/breadcrumb.php'; ?>

<main class="container mx-auto px-4 py-8">
  <!-- Title Section -->
  <section class="text-center mb-8">
    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">SOPMA XXII 2025 Schedule</h1>
    <p class="text-gray-600">Tentative Dates: 2 – 6 October 2025 · Kuching, Sarawak</p>
    <p class="text-sm text-yellow-500">⚠️ Schedule is tentative. Verify with <a href="https://msdeaf.org.my" target="_blank" class="underline hover:text-yellow-300">MSDeaf official sources</a>.</p>
    <p class="text-sm text-gray-500 mt-1">Last updated: 30 Sept 2025</p>
  </section>

  <!-- Desktop Schedule Table -->
  <div class="hidden md:block overflow-x-auto">
    <table class="w-full border-collapse border border-gray-300 text-sm">
      <thead class="bg-gray-100">
        <tr>
          <th class="border border-gray-300 px-4 py-2 text-left">Event / Venue</th>
          <th class="border border-gray-300 px-4 py-2">2 Oct Thu</th>
          <th class="border border-gray-300 px-4 py-2">3 Oct Fri</th>
          <th class="border border-gray-300 px-4 py-2">4 Oct Sat</th>
          <th class="border border-gray-300 px-4 py-2">5 Oct Sun</th>
          <th class="border border-gray-300 px-4 py-2">6 Oct Mon</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="border px-4 py-2 font-medium">Arrival / Departure</td>
          <td class="border px-4 py-2 text-center"><i class="fas fa-plane text-blue-500"></i> <i class="fas fa-bus text-yellow-500"></i></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2 text-center"><i class="fas fa-plane text-blue-500"></i> <i class="fas fa-bus text-yellow-500"></i></td>
        </tr>
        <tr>
          <td class="border px-4 py-2 font-medium">Technical Meeting</td>
          <td class="border px-4 py-2 text-center"><i class="fas fa-users text-green-500"></i></td>
          <td class="border px-4 py-2 text-center"><i class="fas fa-users text-green-500"></i></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2 font-medium">Opening Ceremony<br><span class="text-xs text-gray-500">Hikmah Exchange Event Centre</span></td>
          <td class="border px-4 py-2 text-center"><i class="fas fa-star text-yellow-400"></i></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2 font-medium">Closing Ceremony<br><span class="text-xs text-gray-500">Imperial Hotel Kuching</span></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2"></td>
          <td class="border px-4 py-2 text-center"><i class="fas fa-star text-yellow-400"></i></td>
          <td class="border px-4 py-2"></td>
        </tr>

        <!-- Sports Rows with Images -->
        <?php
        $sports = [
          "Badminton" => ["venue"=>"Arena Sukan Kuching","image"=>"assets/images/Badminton.png","class"=>"badminton"],
          "Futsal" => ["venue"=>"Indoor Stadium Kota Samarahan","image"=>"assets/images/soccer.png","class"=>"futsal"],
          "Athletics" => ["venue"=>"Stadium Sarawak","image"=>"assets/images/runner.png","class"=>"athletics"],
          "Orienteering" => ["venue"=>"Sama Jaya Forest Park","image"=>"assets/images/althete.png","class"=>"orienteering"],
          "Bowling" => ["venue"=>"Megalanes Sarawak","image"=>"assets/images/Bowling.png","class"=>"bowling"]
        ];

        $schedule = [
          "2 Oct Thu" => ["Badminton"=>"L","Futsal"=>"L","Athletics"=>"L","Orienteering"=>"","Bowling"=>"L"],
          "3 Oct Fri" => ["Badminton"=>"G","Futsal"=>"G","Athletics"=>"G","Orienteering"=>"L","Bowling"=>"G"],
          "4 Oct Sat" => ["Badminton"=>"G","Futsal"=>"G","Athletics"=>"G","Orienteering"=>"G","Bowling"=>"G"],
          "5 Oct Sun" => ["Badminton"=>"G","Futsal"=>"G","Athletics"=>"G","Orienteering"=>"","Bowling"=>"G"],
          "6 Oct Mon" => ["Badminton"=>"G","Futsal"=>"G","Athletics"=>"G","Orienteering"=>"G","Bowling"=>"G"]
        ];

        foreach ($sports as $sport => $info): ?>
          <tr>
            <td class="border px-4 py-2 font-medium">
              <div class="flex items-center gap-2">
                <img src="<?php echo $info['image']; ?>" alt="<?php echo $sport; ?>" class="w-6 h-6 object-cover rounded-full">
                <span><?php echo $sport; ?><br><span class="text-xs text-gray-500"><?php echo $info['venue']; ?></span></span>
              </div>
            </td>
            <?php foreach ($schedule as $day => $events): ?>
              <td class="border px-4 py-2 text-center">
                <?php if(isset($events[$sport])): ?>
                  <span class="font-semibold text-indigo-600"><?php echo $events[$sport]; ?></span>
                <?php endif; ?>
              </td>
            <?php endforeach; ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- Mobile Accordion -->
  <div class="md:hidden space-y-4">
    <?php
    $mobile_days = [
      "2 Oct Thu" => ["Arrival / Departure"=>"plane-bus","Technical Meeting"=>"users","Opening Ceremony"=>"star","Badminton"=>"badminton","Futsal"=>"futsal","Athletics"=>"athletics","Bowling"=>"bowling"],
      "3 Oct Fri" => ["Technical Meeting"=>"users","Badminton"=>"badminton","Futsal"=>"futsal","Athletics"=>"athletics","Orienteering"=>"orienteering","Bowling"=>"bowling"],
      "4 Oct Sat" => ["Badminton"=>"badminton","Futsal"=>"futsal","Athletics"=>"athletics","Orienteering"=>"orienteering","Bowling"=>"bowling"],
      "5 Oct Sun" => ["Badminton"=>"badminton","Futsal"=>"futsal","Athletics"=>"athletics","Bowling"=>"bowling"],
      "6 Oct Mon" => ["Closing Ceremony"=>"star","Badminton"=>"badminton","Futsal"=>"futsal","Athletics"=>"athletics","Orienteering"=>"orienteering","Bowling"=>"bowling"]
    ];

    $fa_icons = [
      "plane-bus"=>"<i class='fas fa-plane text-blue-500'></i> <i class='fas fa-bus text-yellow-500'></i>",
      "users"=>"<i class='fas fa-users text-green-500'></i>",
      "star"=>"<i class='fas fa-star text-yellow-400'></i>",
      "badminton"=>"<img src='assets/images/Badminton.png' class='w-6 h-6 rounded-full inline-block'>",
      "futsal"=>"<img src='assets/images/soccer.png' class='w-6 h-6 rounded-full inline-block'>",
      "athletics"=>"<img src='assets/images/runner.png' class='w-6 h-6 rounded-full inline-block'>",
      "orienteering"=>"<img src='assets/images/althete.png' class='w-6 h-6 rounded-full inline-block'>",
      "bowling"=>"<img src='assets/images/Bowling.png' class='w-6 h-6 rounded-full inline-block'>"
    ];

    foreach ($mobile_days as $day => $events): ?>
      <details class="bg-white shadow rounded-lg p-4">
        <summary class="font-semibold text-gray-800 cursor-pointer"><?php echo $day; ?></summary>
        <ul class="mt-2 space-y-2">
          <?php foreach ($events as $event => $icon): ?>
            <li class="flex justify-between border-b pb-1 items-center">
              <span><?php echo $event; ?></span>
              <span><?php echo $fa_icons[$icon]; ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </details>
    <?php endforeach; ?>
  </div>

  <!-- Baton Run Section -->
  <section class="mt-12">
    <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">SOPMA 2025 Baton Run</h2>
    <p class="text-center text-gray-600 mb-6">
      The Baton Run was held across Sarawak in 2025 as part of the official promotional and charity events leading to SOPMA XXII.
    </p>

    <div class="grid md:grid-cols-4 gap-4 text-center">
      <div class="p-4 bg-white shadow rounded-lg">
        <h3 class="font-semibold text-lg">Miri</h3>
        <p class="text-gray-500">4 May 2025</p>
        <p class="text-yellow-500 font-semibold">Public Outreach</p>
      </div>
      <div class="p-4 bg-white shadow rounded-lg">
        <h3 class="font-semibold text-lg">Bintulu</h3>
        <p class="text-gray-500">18 May 2025</p>
        <p class="text-yellow-500 font-semibold">Public Outreach</p>
      </div>
      <div class="p-4 bg-white shadow rounded-lg">
        <h3 class="font-semibold text-lg">Sibu</h3>
        <p class="text-gray-500">25 May 2025</p>
        <p class="text-yellow-500 font-semibold">Public Outreach</p>
      </div>
      <div class="p-4 bg-white shadow rounded-lg">
        <h3 class="font-semibold text-lg">Kuching Final</h3>
        <p class="text-gray-500">8 June 2025</p>
        <p class="text-yellow-500 font-semibold">Public Outreach</p>
      </div>
    </div>
  </section>

  <!-- Legend -->
  <div class="mt-8 text-sm text-gray-600 text-center">
    <p><strong>L</strong> = Training | <strong>G</strong> = Games / Competition</p>
  </div>

</main>

<?php include 'includes/footer.php'; ?>
