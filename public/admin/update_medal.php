<?php
session_start();
if(!isset($_SESSION['admin'])) { 
    http_response_code(403);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

$pdo = new PDO("mysql:host=localhost;dbname=sopma2025","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$data = json_decode(file_get_contents('php://input'), true);

if(isset($data['id'], $data['gold'], $data['silver'], $data['bronze'])){
    $stmt = $pdo->prepare("UPDATE medal_tally SET gold=?, silver=?, bronze=? WHERE id=?");
    $stmt->execute([$data['gold'], $data['silver'], $data['bronze'], $data['id']]);
    echo json_encode(['success' => true]);
} else {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid data']);
}
?>
<?php include('includes/footer.php');?>