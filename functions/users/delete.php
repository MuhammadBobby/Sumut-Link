<?php
// conn
require '../connection.php';

// get id
$id = htmlspecialchars($_GET['id']);

// check id
if (empty($id)) {
    header('Location: ../../index.php?page=users&error=id_not_found');
    exit;
}

// check apakah id digunakan di table lain (transaksi)
// $query = "SELECT * FROM transaksi WHERE created_by = '$id'";
// $result = $conn->query($query);
// if ($result->num_rows > 0) {
//     header('Location: ../../index.php?page=users&error=id_used');
//     exit;
// }


// query
$query = "DELETE FROM users WHERE user_id = '$id'";
$result = $conn->query($query);

// cek query
if ($result) {
    header('Location: ../../index.php?page=users&delete=true');
    exit;
} else {
    header('Location: ../../index.php?page=users&delete=false');
    exit;
}
