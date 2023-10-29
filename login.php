<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == 'manager@manager.com' && $password == '12345') {
        header('Location: dashboard_manager.php');
        exit;
    }

    if ($email == 'admin@admin.com' && $password == '12345') {
        header('Location: dashboard_admin.php');
        exit;
    } else {
        $users = file('users.txt', FILE_IGNORE_NEW_LINES);
        foreach ($users as $user) {
            list($username, $storedEmail, $storedPassword) = explode('|', $user);
            if ($email === $storedEmail && password_verify($password, $storedPassword)) {
                $_SESSION['username'] = $username;
                header('Location: dashboard_user.php'); // Redirect to the appropriate dashboard
                exit;
            }
        }
    }
}

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
    <div class="login_form">
        <h2>Login</h2>
        <form method="post" action="">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" required><br>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
    </div>
    <div class="info">
        <h3>Admin: email - admin@admin.com  Pass - 12345</h3>
        <h3>Manager: email - manager@manager.com  Pass - 12345</h3>
    </div>
</body>

</html>