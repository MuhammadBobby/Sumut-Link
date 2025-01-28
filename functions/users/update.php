<?php
// connection
require '../connection.php';

// get data post
$user_id = htmlspecialchars($_POST['user_id']);
$username = htmlspecialchars($_POST['username']);
$jabatan = htmlspecialchars($_POST['jabatan']);
$role = htmlspecialchars($_POST['role']);


// query
$query = "UPDATE users SET username = '$username', jabatan = '$jabatan', role = '$role' WHERE user_id = '$user_id'";
$result = $conn->query($query);

if ($result) {
    header('Location: ../../index.php?page=users&update=true');
    exit;
} else {
    header('Location: ../../index.php?page=users&error=update_failed');
    exit;
}
