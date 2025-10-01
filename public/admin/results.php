<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
  header("Location: login.php");
  exit;
}
require 'db.php';

// Add result
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $pdo->prepare("INSERT INTO results (sport_id, match_title, team_or_athlete1, team_or_athlete2, score, result_text, date, venue) 
                         VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->execute([
    $_POST['sport_id'], $_POST['match_title'], $_POST['team1'], $_POST['team2'],
    $_POST['score'], $_POST['result_text'], $_POST['date'], $_POST['venue']
  ]);
}

$results = $pdo->query("SELECT r.*, s.name AS sport FROM results r 
                        JOIN sports s ON r.sport_id = s.id 
                        ORDER BY date DESC")->fetchAll();
$sports = $pdo->query("SELECT * FROM sports")->fetchAll();
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main class="p-6">
  <h1 class="text-2xl font-bold mb-4">Manage Results</h1>

  <form method="POST" class="bg-white p-4 rounded shadow mb-6 grid grid-cols-2 gap-4">
    <select name="sport_id" class="border p-2 rounded" required>
      <?php foreach ($sports as $s): ?>
        <option value="<?= $s['id'] ?>"><?= $s['name'] ?></option>
      <?php endforeach; ?>
    </select>
    <input type="text" name="match_title" placeholder="Match Title" class="border p-2 rounded">
    <input type="text" name="team1" placeholder="Team/Athlete 1" class="border p-2 rounded">
    <input type="text" name="team2" placeholder="Team/Athlete 2" class="border p-2 rounded">
    <input type="text" name="score" placeholder="Score" class="border p-2 rounded">
    <input type="text" name="result_text" placeholder="Result (Gold – SelSDeaf)" class="border p-2 rounded">
    <input type="date" name="date" class="border p-2 rounded">
    <input type="text" name="venue" placeholder="Venue" class="border p-2 rounded">
    <button type="submit" class="col-span-2 bg-green-600 text-white py-2 rounded">Save Result</button>
  </form>

  <table class="w-full border-collapse bg-white shadow rounded">
    <thead class="bg-blue-900 text-white">
      <tr>
        <th class="p-2">Sport</th>
        <th class="p-2">Match</th>
        <th class="p-2">Date</th>
        <th class="p-2">Venue</th>
        <th class="p-2">Result</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($results as $r): ?>
        <tr class="border-b">
          <td class="p-2"><?= htmlspecialchars($r['sport']) ?></td>
          <td class="p-2"><?= htmlspecialchars($r['match_title']) ?></td>
          <td class="p-2"><?= $r['date'] ?></td>
          <td class="p-2"><?= htmlspecialchars($r['venue']) ?></td>
          <td class="p-2"><?= htmlspecialchars($r['result_text']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</main>
<?php include 'includes/footer.php'; ?>
