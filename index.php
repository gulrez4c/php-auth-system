<?php
require_once 'config/db.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Get user data
$stmt = $pdo->prepare("SELECT name, email, created_at FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Premium App</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="glass-card dashboard-container">
        <div class="dashboard-header">
            <div class="welcome-text">✨ Welcome, <?php echo htmlspecialchars($user['name']); ?>!</div>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
        
        <div class="premium-card">
            <h3>Premium Features</h3>
            <p>You have access to exclusive content and features.</p>
        </div>
        
        <div class="premium-card">
            <h3>Account Information</h3>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
            <p><strong>Member since:</strong> <?php echo date('F j, Y', strtotime($user['created_at'])); ?></p>
        </div>
        
        <div class="premium-card">
            <h3>Getting Started</h3>
            <p>Explore your premium dashboard and enjoy the benefits!</p>
        </div>
    </div>
</body>
</html>