<?php

session_start();  
s
if (!isset($_SESSION['user_id'])) {
    header("Location: c4-4login.php"); 
    exit();
}


$user_id = $_SESSION['user_id'];
$first_name = $_SESSION['first_name'];
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $first_name; ?>!</h2>
    <p>Email: <?php echo $email; ?></p>
    <p>User ID: <?php echo $user_id; ?></p>

    <a href="logout.php">Logout</a>
</body>
</html>
