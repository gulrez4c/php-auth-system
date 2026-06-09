<?php
// Same as index.php or a different view. For variety, show additional stats.
require_once 'config/db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$stmt = $pdo->prepare("SELECT name, email, created_at FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Overview - Premium App</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="glass-card dashboard-container">
        <div class="dashboard-header">
            <div class="welcome-text">📊 Dashboard Overview</div>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
        
        <div class="premium-card">
            <h3>Your Activity</h3>
            <p>Welcome back, <?php echo htmlspecialchars($user['name']); ?>! You logged in on <?php echo date('F j, Y g:i A'); ?>.</p>
        </div>
        
        <div class="premium-card">
            <h3>Quick Links</h3>
            <p><a href="index.php">Go to Main Dashboard</a></p>
        </div>
    </div>
</body>
</html>