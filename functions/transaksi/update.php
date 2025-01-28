<?php
// connection
require '../connection.php';

// get data post
$transaksi_id = htmlspecialchars($_POST['transaksi_id']);
$created_by = htmlspecialchars($_POST['created_by']);
$nasabah_id = htmlspecialchars($_POST['nasabah_id']);
$jumlah = htmlspecialchars($_POST['jumlah']);
$jenis_transaksi = htmlspecialchars($_POST['jenis_transaksi']);
$keterangan = htmlspecialchars($_POST['keterangan']);


// query
$query = "UPDATE transaksi SET created_by = '$created_by', nasabah_id = '$nasabah_id', jumlah = $jumlah, jenis_transaksi = '$jenis_transaksi', keterangan = '$keterangan' WHERE transaksi_id = '$transaksi_id'";
$result = $conn->query($query);

if ($result) {
    header('Location: ../../index.php?page=transaksi&update=true');
    exit;
} else {
    header('Location: ../../index.php?page=transaksi&error=update_failed');
    exit;
}
