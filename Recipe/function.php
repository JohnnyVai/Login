<?php
session_start();

$file = 'users.json';

// Read users from JSON file
$users = json_decode(file_get_contents($file), true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $is_valid = false;

    foreach ($users as $user) {
        if ($user["email"] === $email && password_verify($password, $user["password"])) {
            $username = $user["username"];
            
            $is_valid = true;
            break;
        }
    }

    if ($is_valid) {
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        header("Location: Home.php");
        exit();
    } else {
        header("Location: index.php?error=Invalid credentials");
        exit();
    }
} else {
    echo "Invalid request.";
}
?>