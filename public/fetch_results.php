<?php
header('Content-Type: application/json');

$pdo = new PDO("mysql:host=localhost;dbname=sopma2025","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$results = $pdo->query("SELECT r.*, s.name AS sport_name, s.venue AS sport_venue 
                        FROM results r 
                        LEFT JOIN sports s ON r.sport_id = s.id
                        ORDER BY r.match_date ASC")->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);
?>
<?php include('includes/footer.php');?>
