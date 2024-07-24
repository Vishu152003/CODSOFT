<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: log.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['user_id']; ?></h2>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
