<?php
$pdo = new PDO("mysql:host=localhost;dbname=sopma2025","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Medals
$medals = $pdo->query("SELECT *, (gold+silver+bronze) AS total FROM medal_tally ORDER BY total DESC")->fetchAll(PDO::FETCH_ASSOC);

// Results
$results = $pdo->query("SELECT r.*, s.name AS sport_name, s.venue AS sport_venue 
                        FROM results r 
                        LEFT JOIN sports s ON r.sport_id = s.id
                        ORDER BY r.match_date ASC")->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(['medals' => $medals, 'results' => $results]);
?>
<?php include('includes/footer.php');?>