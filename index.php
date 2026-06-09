<?php
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
    <title>Dashboard | WebzAPI Elite Web Studio</title>
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
            <h3>Powered by</h3>
            <p><strong>WebzAPI-Elite Web Studio</strong> | Developed by Gulrez Siddiqui</p>
            <p><a href="https://WebzAPI.com" target="_blank">WebzAPI.com</a></p>
        </div>
        
        <!-- Footer -->
        <div class="footer" style="text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; font-size: 12px; color: #888;">
            &copy; <?php echo date('Y'); ?> WebzAPI-Elite Web Studio. All rights reserved. | Crafted with ❤️ by Gulrez Siddiqui
        </div>
    </div>
</body>
</html>