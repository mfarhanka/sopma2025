<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<section class="container h-screen mx-auto py-10">
  <h2 class="text-2xl font-bold mb-6">Venues</h2>

  <div class="grid md:grid-cols-2 gap-6">
    <div class="p-4 bg-white rounded-lg shadow">
      <h3 class="font-semibold">National Stadium</h3>
      <p>Host for Athletics events.</p>
      <iframe class="w-full h-48 mt-3 rounded" src="https://maps.google.com/maps?q=National%20Stadium%20Bukit%20Jalil&output=embed"></iframe>
    </div>
    <div class="p-4 bg-white rounded-lg shadow">
      <h3 class="font-semibold">Bukit Jalil Arena</h3>
      <p>Host for Badminton events.</p>
      <iframe class="w-full h-48 mt-3 rounded" src="https://maps.google.com/maps?q=Bukit%20Jalil%20Arena&output=embed"></iframe>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
