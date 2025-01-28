<?php
// connections
require '../connection.php';
require '../all-functions.php';

// ambil data dari method post
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$verif_password = htmlspecialchars($_POST['password_verif']);
$jabatan = htmlspecialchars($_POST['jabatan']);
$role = htmlspecialchars($_POST['role']);
$created_at = date('Y-m-d H:i:s');
$user_id = generateUserId();

// cek password
if ($password !== $verif_password) {
    header('Location: ../../index.php?page=users&error=password_not_match');
    exit;
}

// hash password
$password = password_hash($password, PASSWORD_DEFAULT);

// insert data
$query = "INSERT INTO users (user_id, username, password, jabatan, role, created_at) VALUES ('$user_id', '$username', '$password', '$jabatan', '$role', '$created_at')";
$result = $conn->query($query);

// cek query
if ($result) {
    header('Location: ../../index.php?page=users&add=true');
    exit;
} else {
    header('Location: ../../index.php?page=users&add=false');
    exit;
}
