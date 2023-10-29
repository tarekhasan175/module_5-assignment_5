<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        <?php
        include("CSS/login_style.css");
        ?>
    </style>
</head>

<body>
    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Read user data from the file and validate credentials
        $users = file('users.txt', FILE_IGNORE_NEW_LINES);
        foreach ($users as $user) {
            list($username, $storedEmail, $storedPassword) = explode('|', $user);
            if ($email === $storedEmail && password_verify($password, $storedPassword)) {
                $_SESSION['username'] = $username;
                header('Location: dashboard.php'); // Redirect to the appropriate dashboard
                exit;
            }
        }
    }
    ?>


    <div class="login_form">
        <h2>Login</h2>
        <form method="post" action="dashboard_admin.php">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" required><br>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>