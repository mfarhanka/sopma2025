<?php
$host = "127.0.0.1"; // try with 127.0.0.1 instead of localhost
$db   = "sopma2025";
$user = "root";
$pass = ""; // empty by default on XAMPP

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    echo "✅ Database connected successfully!";
} catch (Exception $e) {
    die("❌ DB Connection failed: " . $e->getMessage());
}
?>
