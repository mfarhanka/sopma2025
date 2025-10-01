<?php
session_start();
if(!isset($_SESSION['admin'])) { header("Location: login.php"); exit; }

$pdo = new PDO("mysql:host=localhost;dbname=sopma2025","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM sports WHERE id=?");
$stmt->execute([$id]);
$sport = $stmt->fetch();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $venue = $_POST['venue'];

    $stmt = $pdo->prepare("UPDATE sports SET name=?, venue=? WHERE id=?");
    $stmt->execute([$name, $venue, $id]);

    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Sport</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
<h1 class="text-2xl font-bold mb-4">Edit Sport</h1>
<form method="POST" class="space-y-4">
    <input type="text" name="name" value="<?= $sport['name'] ?>" placeholder="Sport Name" class="w-full p-2 border rounded" required>
    <input type="text" name="venue" value="<?= $sport['venue'] ?>" placeholder="Venue" class="w-full p-2 border rounded">
    <button type="submit" class="w-full bg-yellow-500 text-white p-2 rounded hover:bg-yellow-600">Update Sport</button>
</form>
<a href="dashboard.php" class="block mt-4 text-center text-gray-700">Back to Dashboard</a>
</div>
</body>
</html>
<?php include('includes/footer.php');?>