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
            <form method="GET" action="login.php">
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
                <tr>
                    <td>1</td>
                    <td>User</td>
                    <td>user@user.com</td>
                    <td>User</td>
                    <td>
                        <form action="roles.php">
                            <button type='submit' name='edit_user'>Edit</button>
                        </form>
                        <button type='submit' name='delete_user'>Delete</button>
                    </td>
                </tr>
                <?php
                $users = [];

                foreach ($users as $user) {
                    echo "<tr>";
                    echo "<td>{$user['serial']}</td>";
                    echo "<td>{$user['name']}</td>";
                    echo "<td>{$user['email']}</td>";
                    echo "<td>{$user['role']}</td>";
                    echo "<td>
                            <form method='post' action=''>
                                <button type='submit' name='edit_user'>Edit</button>
                                </form>
                                <button type='submit' name='delete_user'>Delete</button>
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
                <tr>
                    <td>1</td>
                    <td>Admin</td>
                    <td>admin@admin.com</td>
                    <td>Admin</td>
                    <td>
                        <form action="roles.php">
                            <button type='submit' name='edit_admin'>Edit</button>
                        </form>
                        <button type='submit' name='delete_admin'>Delete</button>
                    </td>
                </tr>
                <?php
                $admins = [];

                foreach ($admins as $admin) {
                    echo "<tr>";
                    echo "<td>{$admin['serial']}</td>";
                    echo "<td>{$admin['name']}</td>";
                    echo "<td>{$admin['email']}</td>";
                    echo "<td>{$admin['role']}</td>";
                    echo "<td>
                            <form method='post' action=''>
                                <button type='submit' name='edit_admin'>Edit</button>
                                </form>
                                <button type='submit' name='delete_admin'>Delete</button>
                        </td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>