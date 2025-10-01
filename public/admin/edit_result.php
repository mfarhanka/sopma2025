<?php
session_start();
if(!isset($_SESSION['admin'])) { header("Location: login.php"); exit; }

$pdo = new PDO("mysql:host=localhost;dbname=sopma2025","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
require 'functions.php';

// Get result by ID
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM results WHERE id=?");
$stmt->execute([$id]);
$result = $stmt->fetch();

// Fetch all sports
$sports = $pdo->query("SELECT * FROM sports ORDER BY name")->fetchAll(PDO::FETCH_ASSOC);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sport_id = $_POST['sport_id'];
    $event_name = $_POST['event_name'];
    $gold = $_POST['gold'];
    $silver = $_POST['silver'];
    $bronze = $_POST['bronze'];
    $match_date = $_POST['match_date'];

    $stmt = $pdo->prepare("UPDATE results SET sport_id=?, event_name=?, gold=?, silver=?, bronze=?, match_date=? WHERE id=?");
    $stmt->execute([$sport_id, $event_name, $gold, $silver, $bronze, $match_date, $id]);

    // Update medal tally
    updateMedalTally($pdo);

    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Result</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

<div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
<h1 class="text-2xl font-bold mb-4">Edit Result</h1>
<form method="POST" class="space-y-4">
    <select name="sport_id" class="w-full p-2 border rounded" required>
        <option value="">Select Sport</option>
        <?php foreach($sports as $s): ?>
        <option value="<?= $s['id'] ?>" <?= $s['id']==$result['sport_id']?'selected':'' ?>><?= $s['name'] ?> (<?= $s['venue'] ?>)</option>
        <?php endforeach; ?>
    </select>
    <input type="text" name="event_name" value="<?= $result['event_name'] ?>" placeholder="Event Name" class="w-full p-2 border rounded" required>
    <input type="text" name="gold" value="<?= $result['gold'] ?>" placeholder="Gold Winner" class="w-full p-2 border rounded">
    <input type="text" name="silver" value="<?= $result['silver'] ?>" placeholder="Silver Winner" class="w-full p-2 border rounded">
    <input type="text" name="bronze" value="<?= $result['bronze'] ?>" placeholder="Bronze Winner" class="w-full p-2 border rounded">
    <input type="date" name="match_date" value="<?= $result['match_date'] ?>" class="w-full p-2 border rounded" required>
    <button type="submit" class="w-full bg-yellow-500 text-white p-2 rounded hover:bg-yellow-600">Update Result</button>
</form>
<a href="dashboard.php" class="block mt-4 text-center text-gray-700">Back to Dashboard</a>
</div>

</body>
</html>
<?php include('includes/footer.php');?>