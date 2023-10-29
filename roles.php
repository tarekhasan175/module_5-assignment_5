<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles Management</title>
    <link rel="stylesheet" type="text/css" href="CSS/roles_style.css">
</head>

<body>
    <h2>Roles Management</h2>
    <form method="post" action="dashboard_admin.php">
        <label for="username">User Name</label>
        <input type="username" name="username" placeholder="Username" required><br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email" required><br>
        
        <label for="role">Role</label>
        <select name="roles">
            <option value="">Select a role</option>
            <option value="admin">Admin</option>
            <option value="manager">Manager</option>
            <option value="user">User</option>
        </select>
        <input type="submit" value="Update">
    </form>
</body>

</html>