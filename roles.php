<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// Check if the user is an admin
$adminUsers = ['admin_username1', 'admin_username2'];
if (!in_array($_SESSION['username'], $adminUsers)) {
    // If the user is not an admin, deny access
    echo "Access Denied! You are not an admin.";
    exit;
}

// Role management functionality here
?>

<h2>Role Management</h2>
<!-- Implement role management features -->
