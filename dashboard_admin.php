<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="CSS/dash_admin_style.css">
</head>
<body>
    <div class="admin">
        <div class="welcome">
            <h2>Welcome to Admin Dashboard</h2>
            <form method="POST" action="login.php">
                <button type="logout" name="logout">Log out</button>
            </form>
        </div>

        <div class="user-list">
            <div class="add-user">
                <h3>User List</h3>
                <form method="POST" action="add_user.php">
                    <button type="submit" name="add_user">Add User</button>
                </form>
            </div>
            <table>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                <?php
                    // Fetch and display users from a database or an array
                    // Replace this with actual user data retrieval
                    $users = []; // Your user data goes here

                    foreach ($users as $user) {
                        echo "<tr>";
                        echo "<td>{$user['serial']}</td>";
                        echo "<td>{$user['name']}</td>";
                        echo "<td>{$user['email']}</td>";
                        echo "<td>{$user['role']}</td>";
                        echo "<td>
                            <form method='post' action=''>
                                <button type='submit' name='edit_user'>Edit</button>
                                <button type='submit' name='delete_user'>Delete</button>
                            </form>
                        </td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>

        <div class="admin-list">
            <h3>Admin List</h3>
            <table>
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                <?php
                    // Fetch and display admins from a database or an array
                    // Replace this with actual admin data retrieval
                    $admins = []; // Your admin data goes here

                    foreach ($admins as $admin) {
                        echo "<tr>";
                        echo "<td>{$admin['serial']}</td>";
                        echo "<td>{$admin['name']}</td>";
                        echo "<td>{$admin['email']}</td>";
                        echo "<td>{$admin['role']}</td>";
                        echo "<td>
                            <form method='post' action=''>
                                <button type='submit' name='edit_admin'>Edit</button>
                                <button type='submit' name='delete_admin'>Delete</button>
                            </form>
                        </td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
