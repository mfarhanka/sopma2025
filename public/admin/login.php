<?php
session_start();

// Redirect to dashboard if already logged in
if (isset($_SESSION['admin'])) {
    header("Location: dashboard.php");
    exit;
}

// Database connection
$host = "localhost";
$dbname = "sopma2025";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}

$error = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = trim($_POST['username']);
    $pass = trim($_POST['password']);

    $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->execute([$user]);
    $admin = $stmt->fetch();

    if ($admin && password_verify($pass, $admin['password'])) {
        $_SESSION['admin'] = $admin['username'];
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login - SOPMA 2025</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="w-full max-w-md p-8 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-6 text-center">SOPMA 2025 Admin Login</h1>

    <?php if ($error): ?>
        <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
            <?= htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>

    <form method="POST" class="space-y-4">
        <div>
            <label for="username" class="block font-medium mb-1">Username</label>
            <input type="text" id="username" name="username" required
                   class="w-full border px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label for="password" class="block font-medium mb-1">Password</label>
            <input type="password" id="password" name="password" required
                   class="w-full border px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <button type="submit"
                class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            Login
        </button>
    </form>
</div>

</body>
</html>
<?php