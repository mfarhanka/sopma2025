<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
  header("Location: login.php");
  exit;
}
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $pdo->prepare("INSERT INTO medal_tally (state, gold, silver, bronze) 
                         VALUES (?, ?, ?, ?) 
                         ON DUPLICATE KEY UPDATE gold=?, silver=?, bronze=?");
  $stmt->execute([
    $_POST['state'], $_POST['gold'], $_POST['silver'], $_POST['bronze'],
    $_POST['gold'], $_POST['silver'], $_POST['bronze']
  ]);
}

$medals = $pdo->query("SELECT * FROM medal_tally ORDER BY gold DESC, silver DESC, bronze DESC")->fetchAll();
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main class="p-6">
  <h1 class="text-2xl font-bold mb-4">Medal Tally</h1>

  <form method="POST" class="bg-white p-4 rounded shadow mb-6 grid grid-cols-4 gap-4">
    <input type="text" name="state" placeholder="State (e.g. SelSDeaf)" class="border p-2 rounded" required>
    <input type="number" name="gold" placeholder="Gold" class="border p-2 rounded" min="0">
    <input type="number" name="silver" placeholder="Silver" class="border p-2 rounded" min="0">
    <input type="number" name="bronze" placeholder="Bronze" class="border p-2 rounded" min="0">
    <button type="submit" class="col-span-4 bg-yellow-600 text-white py-2 rounded">Update Tally</button>
  </form>

  <table class="w-full border-collapse bg-white shadow rounded">
    <thead class="bg-blue-900 text-white">
      <tr>
        <th class="p-2">State</th>
        <th class="p-2">Gold</th>
        <th class="p-2">Silver</th>
        <th class="p-2">Bronze</th>
        <th class="p-2">Total</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($medals as $m): ?>
        <tr class="border-b text-center">
          <td class="p-2 font-bold"><?= htmlspecialchars($m['state']) ?></td>
          <td class="p-2 text-yellow-600"><?= $m['gold'] ?></td>
          <td class="p-2 text-gray-600"><?= $m['silver'] ?></td>
          <td class="p-2 text-orange-600"><?= $m['bronze'] ?></td>
          <td class="p-2 font-semibold"><?= $m['total'] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</main>
<?php include 'includes/footer.php'; ?>
