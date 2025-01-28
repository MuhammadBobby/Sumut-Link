<?php
// conn
require '../connection.php';

// get id
$id = htmlspecialchars($_GET['id']);

// check id
if (empty($id)) {
    header('Location: ../../index.php?page=transaksi&error=id_not_found');
    exit;
}


// query
$query = "DELETE FROM transaksi WHERE transaksi_id = '$id'";
$result = $conn->query($query);

// cek query
if ($result) {
    header('Location: ../../index.php?page=transaksi&delete=true');
    exit;
} else {
    header('Location: ../../index.php?page=transaksi&delete=false');
    exit;
}
