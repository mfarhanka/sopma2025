<?php
session_start();
if(!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$pdo = new PDO("mysql:host=localhost;dbname=sopma2025","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Handle logout
if(isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

// Fetch Medals
$medals = $pdo->query("SELECT *, (gold+silver+bronze) AS total FROM medal_tally ORDER BY total DESC")->fetchAll(PDO::FETCH_ASSOC);

// Fetch Results
$results = $pdo->query("SELECT r.*, s.name AS sport_name, s.venue AS sport_venue 
                        FROM results r 
                        LEFT JOIN sports s ON r.sport_id = s.id
                        ORDER BY r.match_date ASC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard - SOPMA 2025</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body class="bg-gray-100 min-h-screen">

<header class="bg-blue-900 text-white p-4 flex justify-between items-center shadow-md">
    <h1 class="text-2xl font-bold">Admin Dashboard</h1>
    <a href="?logout=1" class="bg-red-600 px-4 py-2 rounded hover:bg-red-700">Logout</a>
</header>

<main class="p-6 space-y-12 max-w-7xl mx-auto">

<!-- Medal Tally Section -->
<section>
    <h2 class="text-2xl font-bold mb-4">🏅 Medal Tally</h2>
    <div class="overflow-x-auto shadow-lg rounded-lg bg-white border border-gray-200">
        <table class="w-full text-center text-sm md:text-base border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2">State</th>
                    <th class="px-4 py-2">🥇 Gold</th>
                    <th class="px-4 py-2">🥈 Silver</th>
                    <th class="px-4 py-2">🥉 Bronze</th>
                    <th class="px-4 py-2">Total</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($medals as $m): ?>
                <tr class="border-t hover:bg-yellow-50 transition">
                    <td class="px-4 py-2 font-medium"><?= $m['state_name'] ?></td>
                    <td class="px-4 py-2"><?= $m['gold'] ?></td>
                    <td class="px-4 py-2"><?= $m['silver'] ?></td>
                    <td class="px-4 py-2"><?= $m['bronze'] ?></td>
                    <td class="px-4 py-2 font-bold"><?= $m['total'] ?></td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="edit_medal.php?id=<?= $m['id'] ?>" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                        <a href="delete_medal.php?id=<?= $m['id'] ?>" onclick="return confirm('Delete this medal tally?')" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<!-- Results Section -->
<section>
    <h2 class="text-2xl font-bold mb-4">⚡ Match Results</h2>
    <div class="overflow-x-auto shadow-lg rounded-lg bg-white border border-gray-200">
        <table class="w-full text-center text-sm md:text-base border-collapse">
            <thead class="bg-blue-100">
                <tr>
                    <th class="px-4 py-2">Sport</th>
                    <th class="px-4 py-2">Event</th>
                    <th class="px-4 py-2">Venue</th>
                    <th class="px-4 py-2">Date</th>
                    <th class="px-4 py-2">Gold</th>
                    <th class="px-4 py-2">Silver</th>
                    <th class="px-4 py-2">Bronze</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($results as $r): ?>
                <tr class="border-t hover:bg-blue-50 transition">
                    <td class="px-4 py-2"><?= $r['sport_name'] ?></td>
                    <td class="px-4 py-2"><?= $r['event_name'] ?></td>
                    <td class="px-4 py-2"><?= $r['sport_venue'] ?></td>
                    <td class="px-4 py-2"><?= $r['match_date'] ?></td>
                    <td class="px-4 py-2"><?= $r['gold'] ?></td>
                    <td class="px-4 py-2"><?= $r['silver'] ?></td>
                    <td class="px-4 py-2"><?= $r['bronze'] ?></td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="edit_result.php?id=<?= $r['id'] ?>" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                        <a href="delete_result.php?id=<?= $r['id'] ?>" onclick="return confirm('Delete this result?')" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

</main>
</body>
</html>
