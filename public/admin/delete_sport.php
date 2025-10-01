<?php
session_start();
if(!isset($_SESSION['admin'])) { header("Location: login.php"); exit; }

$pdo = new PDO("mysql:host=localhost;dbname=sopma2025","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM sports WHERE id=?");
$stmt->execute([$id]);

header("Location: dashboard.php");
exit;
?>
<?php include('includes/footer.php');?>