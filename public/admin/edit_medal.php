<?php
session_start();
if(!isset($_SESSION['admin'])) { header("Location: login.php"); exit; }

$pdo = new PDO("mysql:host=localhost;dbname=sopma2025","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'];
$medal = $pdo->prepare("SELECT * FROM medal_tally WHERE id=?");
$medal->execute([$id]);
$m = $medal->fetch();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $gold = $_POST['gold'];
    $silver = $_POST['silver'];
    $bronze = $_POST['bronze'];

    $stmt = $pdo->prepare("UPDATE medal_tally SET gold=?, silver=?, bronze=? WHERE id=?");
    $stmt->execute([$gold,$silver,$bronze,$id]);
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Medal Tally</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
<h1 class="text-2xl font-bold mb-4">Edit Medal Tally</h1>
<form method="POST" class="space-y-3">
    <input type="number" name="gold" value="<?= $m['gold'] ?>" class="w-full p-2 border rounded" min="0" placeholder="Gold">
    <input type="number" name="silver" value="<?= $m['silver'] ?>" class="w-full p-2 border rounded" min="0" placeholder="Silver">
    <input type="number" name="bronze" value="<?= $m['bronze'] ?>" class="w-full p-2 border rounded" min="0" placeholder="Bronze">
    <button type="submit" class="w-full bg-yellow-500 text-white p-2 rounded hover:bg-yellow-600">Update Medals</button>
</form>
<a href="dashboard.php" class="block mt-4 text-center text-gray-700">Back to Dashboard</a>
</div>
</body>
</html>
