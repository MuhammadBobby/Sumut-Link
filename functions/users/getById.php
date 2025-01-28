<?php
$query = "SELECT * FROM users WHERE user_id = '$id'";
$result = $conn->query($query);
$row = $result->fetch_assoc();

$user = [];
if ($result->num_rows > 0) {
    $user = $row;
}
