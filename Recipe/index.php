<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>

<body>
    <div class="login-container">
       <form class="login-form" action="function.php" method="POST">
    <h2>Login</h2>
   
    <div class="input-group">
        <input type="email" name="email" required>
        <label for="email">Email</label>
    </div>

    <div class="input-group">
        <input type="password" name="password" required>
        <label for="password">Password</label>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["error"])) {
            $error = htmlspecialchars($_GET["error"], ENT_QUOTES, 'UTF-8');
            echo '<div class="error-message"> '. $error . '</div>';
        }
        if (isset($_GET["success"])) {
            $success = htmlspecialchars($_GET["success"], ENT_QUOTES, 'UTF-8');
            echo '<div class="success-message"><h1>' . $success . '</h1></div>';

        }


    }
    ?>

    <button type="submit">Login</button>
</form>

    </div>
</body>


</html>