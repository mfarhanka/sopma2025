<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
  $pageNames = [
    "index.php" => "Home",
    "schedule.php" => "Schedule",
    "results.php" => "Results",
    "venue.php" => "Venues",
    "athlete.php" => "Athlete"
  ];
?>

<!-- Breadcrumbs -->
<nav class="bg-gray-100 py-3 px-4 md:px-8 text-sm font-medium" aria-label="Breadcrumb">
  <ol class="flex items-center space-x-2 text-gray-700">
    <!-- Home -->
    <li>
      <a href="index.php" class="hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">
        🏠 Home
      </a>
    </li>

    <?php if ($currentPage !== "index.php"): ?>
      <li>
        <span class="text-gray-400">›</span>
      </li>
      <li class="text-blue-800 font-semibold">
        <?php echo $pageNames[$currentPage] ?? "Page"; ?>
      </li>
    <?php endif; ?>
  </ol>
</nav>
