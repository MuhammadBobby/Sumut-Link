<?php
// connection
include '../connection.php';

// get data
$user_id = htmlspecialchars($_POST['user_id']);
$old_pass = htmlspecialchars($_POST['old_pass']);
$password = htmlspecialchars($_POST['password']);
$password_verif = htmlspecialchars($_POST['password_verif']);


// check password
if ($password !== $password_verif) {
    header('Location: ../../index.php?page=dashboard&error=password_not_match');
    exit;
}


// check old pass
$query = "SELECT * FROM users WHERE user_id = '$user_id'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (!password_verify($old_pass, $user['password'])) {
        header('Location: ../../index.php?page=dashboard&error=old_pass_not_match');
        exit;
    }


    // perbaharui password
    $new_password = password_hash($password, PASSWORD_DEFAULT);
    $query_pass = "UPDATE users SET password = '$new_password' WHERE user_id = '$user_id'";
    $result_pass = $conn->query($query_pass);
    if ($result_pass) {
        header('Location: ../../index.php?page=dashboard&success=password_updated');
        exit;
    } else {
        header('Location: ../../index.php?page=dashboard&error=password_update_failed');
        exit;
    }
} else {
    header('Location: ../../index.php?page=dashboard&error=id_not_found');
    exit;
}
