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
    <div class="flex flex-col md:flex-row gap-4 justify-center">
      <input id="searchInput" type="text" placeholder="Search athlete by name..." 
        class="w-full md:w-1/3 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">

      <select id="sportFilter" class="w-full md:w-1/4 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        <option value="">All Sports</option>
        <option value="Badminton">Badminton</option>
        <option value="Futsal">Futsal</option>
        <option value="Athletics">Athletics</option>
      </select>

      <select id="stateFilter" class="w-full md:w-1/4 border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
        <option value="">All States</option>
        <option value="FTDeaf">FTDeaf</option>
        <option value="JSDeaf">JSDeaf</option>
        <option value="SelSDeaf">SelSDeaf</option>
      </select>
    </div>
  </section>

  <!-- Athletes Grid -->
  <div id="athletesGrid" class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
    <?php
    $athletes = [
      ['id'=>1,'name'=>'Aiman Rahman','sport'=>'Badminton','state'=>'SelSDeaf','gold'=>2,'silver'=>1,'image'=>'assets/images/athlete.jpg','bio'=>'Aiman Rahman is a top badminton player.'],
      ['id'=>2,'name'=>'Nur Aisyah','sport'=>'Futsal','state'=>'FTDeaf','gold'=>1,'silver'=>0,'image'=>'assets/images/athlete.jpg','bio'=>'Nur Aisyah is a dynamic futsal player.'],
      ['id'=>3,'name'=>'Adam Iskandar','sport'=>'Athletics','state'=>'JSDeaf','gold'=>1,'silver'=>2,'image'=>'assets/images/athlete.jpg','bio'=>'Adam Iskandar excels in track events.']
    ];

    foreach($athletes as $athlete): ?>
      <div class="athlete-card bg-white shadow-lg rounded-xl overflow-hidden border hover:shadow-xl transition"
           data-name="<?php echo strtolower($athlete['name']); ?>"
           data-sport="<?php echo strtolower($athlete['sport']); ?>"
           data-state="<?php echo strtolower($athlete['state']); ?>">
        <img src="<?php echo $athlete['image']; ?>" alt="<?php echo $athlete['name']; ?> photo" class="w-full h-48 object-cover">
        <div class="p-4">
          <h2 class="text-xl font-bold text-gray-800"><?php echo $athlete['name']; ?></h2>
          <p class="text-gray-600">🏅 <?php echo $athlete['sport']; ?> | <?php echo $athlete['state']; ?></p>
          <div class="flex items-center gap-2 mt-2">
            <?php if($athlete['gold']>0): ?><span class="bg-yellow-400 text-white text-sm px-2 py-1 rounded-full">🥇 <?php echo $athlete['gold']; ?> Gold</span><?php endif; ?>
            <?php if($athlete['silver']>0): ?><span class="bg-gray-400 text-white text-sm px-2 py-1 rounded-full">🥈 <?php echo $athlete['silver']; ?> Silver</span><?php endif; ?>
          </div>
          <button 
            class="mt-4 w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition open-modal" 
            data-athlete-id="<?php echo $athlete['id']; ?>">
            View Profile →
          </button>
        </div>
      </div>

      <!-- Modal -->
      <div id="modal-<?php echo $athlete['id']; ?>" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-xl shadow-lg max-w-md w-full relative">
          <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 close-modal">&times;</button>
          <img src="<?php echo $athlete['image']; ?>" alt="<?php echo $athlete['name']; ?> photo" class="w-full h-48 object-cover rounded-t-xl">
          <div class="p-6">
            <h3 class="text-2xl font-bold text-gray-800 mb-2"><?php echo $athlete['name']; ?></h3>
            <p class="text-gray-600 mb-4">🏅 <?php echo $athlete['sport']; ?> | <?php echo $athlete['state']; ?></p>
            <p class="text-gray-700"><?php echo $athlete['bio']; ?></p>
            <div class="flex gap-2 mt-4">
              <?php if($athlete['gold']>0): ?><span class="bg-yellow-400 text-white text-sm px-2 py-1 rounded-full">🥇 <?php echo $athlete['gold']; ?> Gold</span><?php endif; ?>
              <?php if($athlete['silver']>0): ?><span class="bg-gray-400 text-white text-sm px-2 py-1 rounded-full">🥈 <?php echo $athlete['silver']; ?> Silver</span><?php endif; ?>
            </div>
          </div>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
</main>

<?php include 'includes/footer.php'; ?>

<script>
  // Modal functionality
  document.querySelectorAll('.open-modal').forEach(btn=>{
    btn.addEventListener('click',()=>document.getElementById(`modal-${btn.dataset.athleteId}`).classList.remove('hidden'));
  });
  document.querySelectorAll('.close-modal').forEach(btn=>{
    btn.addEventListener('click',()=>btn.closest('div[id^="modal-"]').classList.add('hidden'));
  });
  document.querySelectorAll('div[id^="modal-"]').forEach(modal=>{
    modal.addEventListener('click',e=>{if(e.target===modal)modal.classList.add('hidden');});
  });

  // Live search and filters
  const searchInput = document.getElementById('searchInput');
  const sportFilter = document.getElementById('sportFilter');
  const stateFilter = document.getElementById('stateFilter');
  const athleteCards = document.querySelectorAll('.athlete-card');

  function filterAthletes() {
    const searchValue = searchInput.value.toLowerCase();
    const sportValue = sportFilter.value.toLowerCase();
    const stateValue = stateFilter.value.toLowerCase();

    athleteCards.forEach(card=>{
      const name = card.dataset.name;
      const sport = card.dataset.sport;
      const state = card.dataset.state;

      if ((name.includes(searchValue) || searchValue==='') &&
          (sport.includes(sportValue) || sportValue==='') &&
          (state.includes(stateValue) || stateValue==='')) {
        card.classList.remove('hidden');
      } else {
        card.classList.add('hidden');
      }
    });
  }

  searchInput.addEventListener('input', filterAthletes);
  sportFilter.addEventListener('change', filterAthletes);
  stateFilter.addEventListener('change', filterAthletes);
</script>
