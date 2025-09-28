<nav class="bg-blue-900 text-white">
  <div class="container mx-auto flex justify-between items-center p-4">
    <a href="index.php" class="text-xl font-bold">MSDeaf Games 2025</a>
    <button id="menu-btn" class="lg:hidden block focus:outline-none" aria-label="Toggle Menu">
      ☰
    </button>
    <ul id="menu" class="hidden lg:flex space-x-6">
      <li><a href="index.php" class="hover:underline">Home</a></li>
      <li><a href="schedule.php" class="hover:underline">Schedule</a></li>
      <li><a href="results.php" class="hover:underline">Results</a></li>
      <li><a href="venue.php" class="hover:underline">Venues</a></li>
      <li><a href="athlete.php" class="hover:underline">Athlete</a></li>
    </ul>
  </div>
</nav>

<script>
  document.getElementById("menu-btn").addEventListener("click", function () {
    document.getElementById("menu").classList.toggle("hidden");
  });
</script>
