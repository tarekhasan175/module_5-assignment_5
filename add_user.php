<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'post') {
    // Validation and data handling here
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Save user data to a text file (users.txt)
    $userData = "$username|$email|$password\n";
    file_put_contents('users.txt', $userData, FILE_APPEND);

    // Redirect to login page
    header('Location: login.php');
    // header('Refresh: 0; url=login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" type="text/css" href="CSS/register_style.css">
</head>

<body>
    <h2>Add user</h2>
    <form method="post" action="dashboard_admin.php">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Add">
    </form>
</body>

</html>