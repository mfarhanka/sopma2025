<?php
header('Content-Type: application/json');

$pdo = new PDO("mysql:host=localhost;dbname=sopma2025","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$medals = $pdo->query("SELECT *, (gold+silver+bronze) AS total FROM medal_tally ORDER BY total DESC")->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($medals);
?>
<?php include('includes/footer.php');?>