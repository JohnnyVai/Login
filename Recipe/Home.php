<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION["username"];
$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="welcome-container">
        <h2>Welcome, <span class='username'><?php echo htmlspecialchars($username); ?></span>!</h2>
        <p>Email: <span class='email'><?php echo htmlspecialchars($email); ?></span></p>
        <a href="Logout.php" class="logout-button">Logout</a>
    </div>

</body>

</html>
