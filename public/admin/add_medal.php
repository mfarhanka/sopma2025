<?php
session_start();
if(!isset($_SESSION['admin'])) { header("Location: login.php"); exit; }

$pdo = new PDO("mysql:host=localhost;dbname=sopma2025","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $state_name = $_POST['state_name'];
    $gold = $_POST['gold'];
    $silver = $_POST['silver'];
    $bronze = $_POST['bronze'];

    $stmt = $pdo->prepare("INSERT INTO medal_tally (state_name, gold, silver, bronze) VALUES (?, ?, ?, ?)");
    $stmt->execute([$state_name, $gold, $silver, $bronze]);
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Medal Tally</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
<h1 class="text-2xl font-bold mb-4">Add Medal Tally</h1>
<form method="POST" class="space-y-3">
    <input type="text" name="state_name" class="w-full p-2 border rounded" placeholder="State Name" required>
    <input type="number" name="gold" class="w-full p-2 border rounded" placeholder="Gold" min="0">
    <input type="number" name="silver" class="w-full p-2 border rounded" placeholder="Silver" min="0">
    <input type="number" name="bronze" class="w-full p-2 border rounded" placeholder="Bronze" min="0">
    <button type="submit" class="w-full bg-green-500 text-white p-2 rounded hover:bg-green-600">Add Medal</button>
</form>
<a href="dashboard.php" class="block mt-4 text-center text-gray-700">Back to Dashboard</a>
</div>
</body>
</html>
<?php include('includes/footer.php');?>