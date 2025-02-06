<?php
// conn
require '../connection.php';

// get id
$id = htmlspecialchars($_GET['id']);

// check id
if (empty($id)) {
    header('Location: ../../index.php?page=nasabah&error=id_not_found');
    exit;
}

// check apakah id digunakan di table lain (transaksi)
// $query = "SELECT * FROM transaksi WHERE nasabah_id = '$id'";
// $result = $conn->query($query);
// if ($result->num_rows > 0) {
//     header('Location: ../../index.php?page=nasabah&error=id_used');
//     exit;
// }


// query
$query = "DELETE FROM nasabah WHERE nik_ktp = '$id'";
$result = $conn->query($query);

// cek query
if ($result) {
    header('Location: ../../index.php?page=nasabah&delete=true');
    exit;
} else {
    header('Location: ../../index.php?page=nasabah&delete=false');
    exit;
}
