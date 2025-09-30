<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>
<?php include 'includes/breadcrumb.php'; ?>

<main class="max-w-7xl mx-auto px-4 py-12">
  <!-- Hero Section -->
  <section class="text-center mb-12">
    <h1 class="text-4xl font-bold text-blue-700 mb-4">📍 SOPMA XXII Sarawak 2025 Venues</h1>
    <p class="text-lg text-gray-600">Find detailed information about competition venues, accessibility, and transport options.</p>
  </section>

  <!-- Venues Grid -->
  <div class="grid md:grid-cols-2 gap-8">
    
    <!-- Venue Card 1 -->
    <div class="bg-white shadow-lg rounded-xl overflow-hidden border hover:shadow-xl transition">
      <div class="p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-2">🏟 Stadium Sarawak</h2>
        <p class="text-gray-600 mb-4">Main venue for Athletics, Opening and Closing Ceremonies</p>

        <!-- Map -->
        <div class="ratio ratio-16x9 mb-4">
          <iframe 
            src="https://www.google.com/maps?q=Stadium+Sarawak&output=embed"
            class="w-full h-64 rounded-lg border"
            allowfullscreen="" loading="lazy" aria-label="Map for Stadium Sarawak"></iframe>
        </div>

        <!-- Venue Details -->
        <ul class="space-y-2 text-gray-700">
          <li>✅ Wheelchair accessible seating</li>
          <li>✅ Deaf interpreters available</li>
          <li>✅ Digital scoreboards & live captioning</li>
          <li>🚍 Bus stop 200m away</li>
        </ul>
      </div>
    </div>

    <!-- Venue Card 2 -->
    <div class="bg-white shadow-lg rounded-xl overflow-hidden border hover:shadow-xl transition">
      <div class="p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-2">🏸 Arena Sukan Kuching</h2>
        <p class="text-gray-600 mb-4">Venue for Badminton</p>

        <!-- Map -->
        <div class="ratio ratio-16x9 mb-4">
          <iframe 
            src="https://www.google.com/maps?q=Arena+Sukan+Kuching&output=embed"
            class="w-full h-64 rounded-lg border"
            allowfullscreen="" loading="lazy" aria-label="Map for Arena Sukan Kuching"></iframe>
        </div>

        <!-- Venue Details -->
        <ul class="space-y-2 text-gray-700">
          <li>✅ Accessible restrooms</li>
          <li>✅ Deaf signage & interpreters</li>
          <li>🚖 10 mins from city center</li>
          <li>🚍 Shuttle service available</li>
        </ul>
      </div>
    </div>

    <!-- Venue Card 3 -->
    <div class="bg-white shadow-lg rounded-xl overflow-hidden border hover:shadow-xl transition">
      <div class="p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-2">🏐 Indoor Stadium Kota Samarahan</h2>
        <p class="text-gray-600 mb-4">Venue for Futsal</p>

        <!-- Map -->
        <div class="ratio ratio-16x9 mb-4">
          <iframe 
            src="https://www.google.com/maps?q=Indoor+Stadium+Kota+Samarahan&output=embed"
            class="w-full h-64 rounded-lg border"
            allowfullscreen="" loading="lazy" aria-label="Map for Indoor Stadium Kota Samarahan"></iframe>
        </div>

        <!-- Venue Details -->
        <ul class="space-y-2 text-gray-700">
          <li>✅ Wheelchair accessible</li>
          <li>✅ Scoreboards with live captioning</li>
          <li>🚍 Shuttle buses from Athlete Village</li>
        </ul>
      </div>
    </div>

    <!-- Venue Card 4 -->
    <div class="bg-white shadow-lg rounded-xl overflow-hidden border hover:shadow-xl transition">
      <div class="p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-2">🧭 Sama Jaya Forest Park</h2>
        <p class="text-gray-600 mb-4">Venue for Orienteering</p>

        <!-- Map -->
        <div class="ratio ratio-16x9 mb-4">
          <iframe 
            src="https://www.google.com/maps?q=Sama+Jaya+Forest+Park&output=embed"
            class="w-full h-64 rounded-lg border"
            allowfullscreen="" loading="lazy" aria-label="Map for Sama Jaya Forest Park"></iframe>
        </div>

        <!-- Venue Details -->
        <ul class="space-y-2 text-gray-700">
          <li>✅ Trail marked with Deaf-friendly signage</li>
          <li>✅ Accessible checkpoints</li>
          <li>🚍 Shuttle buses available</li>
        </ul>
      </div>
    </div>

    <!-- Venue Card 5 -->
    <div class="bg-white shadow-lg rounded-xl overflow-hidden border hover:shadow-xl transition">
      <div class="p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-2">🎳 Megalanes Sarawak</h2>
        <p class="text-gray-600 mb-4">Venue for Bowling</p>

        <!-- Map -->
        <div class="ratio ratio-16x9 mb-4">
          <iframe 
            src="https://www.google.com/maps?q=Megalanes+Sarawak&output=embed"
            class="w-full h-64 rounded-lg border"
            allowfullscreen="" loading="lazy" aria-label="Map for Megalanes Sarawak"></iframe>
        </div>

        <!-- Venue Details -->
        <ul class="space-y-2 text-gray-700">
          <li>✅ Wheelchair accessible lanes</li>
          <li>✅ Deaf-friendly announcements</li>
          <li>🚖 15 mins from city center</li>
        </ul>
      </div>
    </div>

  </div>

  <!-- Transportation Section -->
  <section class="mt-16 bg-blue-50 p-8 rounded-xl shadow">
    <h2 class="text-2xl font-bold text-blue-700 mb-4">🚗 Transportation Guide</h2>
    <p class="text-gray-700 mb-6">Athletes and visitors can use the following transport options to reach competition venues:</p>
    <ul class="list-disc list-inside text-gray-700 space-y-2">
      <li>Shuttle buses run daily from Athlete Village to all venues.</li>
      <li>Nearest airport: Kuching International Airport (20 mins by car).</li>
      <li>Grab/Taxi services widely available.</li>
      <li>Public buses connect Stadium Sarawak, Arena Sukan Kuching, and Indoor Stadium Kota Samarahan to the city center.</li>
    </ul>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
