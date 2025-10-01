<?php
session_start();
if(!isset($_SESSION['admin'])) { header("Location: login.php"); exit; }

$pdo = new PDO("mysql:host=localhost;dbname=sopma2025","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $venue = $_POST['venue'];

    $stmt = $pdo->prepare("INSERT INTO sports (name, venue) VALUES (?, ?)");
    $stmt->execute([$name, $venue]);

    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Sport</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
<h1 class="text-2xl font-bold mb-4">Add Sport</h1>
<form method="POST" class="space-y-4">
    <input type="text" name="name" placeholder="Sport Name" class="w-full p-2 border rounded" required>
    <input type="text" name="venue" placeholder="Venue" class="w-full p-2 border rounded">
    <button type="submit" class="w-full bg-green-500 text-white p-2 rounded hover:bg-green-600">Add Sport</button>
</form>
<a href="dashboard.php" class="block mt-4 text-center text-gray-700">Back to Dashboard</a>
</div>
</body>
</html>
