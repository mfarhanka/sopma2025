<?php include('includes/header.php');?>
<?php include('includes/nav.php');?>

<main class="">

  <!-- Hero Section -->
  <section class="relative bg-gradient-to-r from-[#FF7C27] to-[#FFD23A] text-white">
    <div class="container mx-auto py-24 text-center">
      <h1 class="text-4xl md:text-6xl font-bold">SOPMA XXII Baton Run 2025</h1>
      <p class="mt-4 text-xl md:text-2xl">Join the journey across Sarawak to celebrate Deaf sports!</p>
      <div class="mt-8 flex justify-center space-x-4 flex-wrap">
        <a href="#timeline" class="bg-white text-[#FF7C27] px-6 py-3 rounded-lg font-semibold hover:bg-yellow-400 transition">View Timeline</a>
        <a href="#tickets" class="bg-[#1A3A4C] px-6 py-3 rounded-lg font-semibold hover:bg-[#0F2633] transition">Register / Tickets</a>
      </div>
    </div>
  </section>

  <!-- Timeline Section -->
  <section id="timeline" class="container mx-auto py-16">
    <h2 class="text-3xl font-bold text-center mb-12">Baton Run Timeline</h2>

    <?php
    $baton_legs = [
      ['city'=>'Miri','date'=>'2025-05-04','venue'=>'Taman Awam Miri','tickets'=>'https://ticket2u.com/miri'],
      ['city'=>'Bintulu','date'=>'2025-05-18','venue'=>'Bintulu Town Square','tickets'=>'https://ticket2u.com/bintulu'],
      ['city'=>'Sibu','date'=>'2025-05-25','venue'=>'Sibu Sports Complex','tickets'=>'https://ticket2u.com/sibu'],
      ['city'=>'Kuching','date'=>'2025-06-08','venue'=>'Kuching Waterfront','tickets'=>'https://ticket2u.com/kuching']
    ];
    ?>

    <div class="space-y-12">
      <?php foreach($baton_legs as $leg): ?>
        <div class="flex flex-col md:flex-row items-center md:items-start md:space-x-8">
          <div class="flex-shrink-0 w-24 h-24 rounded-full bg-[#FF7C27] text-white flex items-center justify-center font-bold text-xl">
            <?= date('d', strtotime($leg['date'])) ?>
          </div>
          <div class="mt-4 md:mt-0">
            <h3 class="text-2xl font-semibold"><?= $leg['city'] ?></h3>
            <p class="mt-1 text-gray-700"><?= date('j M Y', strtotime($leg['date'])) ?> – <?= $leg['venue'] ?></p>
            <a href="<?= $leg['tickets'] ?>" target="_blank" rel="noopener" class="mt-2 inline-block bg-[#1A3A4C] text-white px-4 py-2 rounded hover:bg-[#0F2633] transition">Get Tickets</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Media & Highlights Section -->
  <!-- <section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold text-center mb-8">Media & Highlights</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <img src="images/miri-baton.jpg" alt="Miri Baton Run" class="rounded shadow-lg">
      <img src="images/bintulu-baton.jpg" alt="Bintulu Baton Run" class="rounded shadow-lg">
      <img src="images/sibu-baton.jpg" alt="Sibu Baton Run" class="rounded shadow-lg">
      <img src="images/kuching-baton.jpg" alt="Kuching Baton Run" class="rounded shadow-lg">
    </div>
  </section> -->

  <!-- Call-to-Action Section -->
  <section id="tickets" class="bg-[#FFD23A] py-16 text-center">
    <h2 class="text-3xl font-bold mb-6">Be Part of the Baton Run!</h2>
    <p class="mb-8 text-lg text-[#1A3A4C]">Join us to celebrate Deaf sports and support local communities across Sarawak.</p>
    <div class="flex justify-center gap-4 flex-wrap">
      <a href="https://ticket2u.com" target="_blank" rel="noopener" class="bg-[#FF7C27] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#E6601C] transition">Register to Run</a>
      <a href="volunteer.php" class="bg-[#1A3A4C] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#0F2633] transition">Volunteer</a>
      <a href="donate.php" class="bg-white text-[#FF7C27] px-6 py-3 rounded-lg font-semibold hover:bg-yellow-400 transition">Donate</a>
    </div>
  </section>

</main>

<?php include('includes/footer.php'); ?>
