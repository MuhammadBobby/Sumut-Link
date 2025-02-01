<?php
// connection
include '../connection.php';

// get data post
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$rememberMe = htmlspecialchars($_POST['rememberMe']);



// check if username and password is empty
if (empty($username) || empty($password)) {
    header('location: ../../login.php?error=empty');
    exit();
}

// query
$query = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($query);

// check if user exists
if ($result->num_rows == 0) {
    header('location: ../../login.php?error=incorect_username');
    exit();
}

// check if password is correct
$row = $result->fetch_assoc();
if (password_verify($password, $row['password'])) {
    // set session
    session_start();
    $_SESSION['access_token'] = $row['user_id'];

    // if remember me is checked
    if ($rememberMe == 'on') {
        setcookie('access_token', $row['user_id'], time() + 60 * 60 * 24 * 7, '/'); // 7 days
    }

    header('location: ../../index.php');
    exit();
} else {
    header('location: ../../login.php?error=incorect_password');
    exit();
}

$conn->close();
