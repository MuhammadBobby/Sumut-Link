<?php
// connections
require '../connection.php';
require '../all-functions.php';

// ambil data dari method post
$created_by = htmlspecialchars($_POST['created_by']);
$nasabah_id = htmlspecialchars($_POST['nasabah_id']);
$jumlah = htmlspecialchars($_POST['jumlah']);
$jenis_transaksi = htmlspecialchars($_POST['jenis_transaksi']);
$keterangan = htmlspecialchars($_POST['keterangan']);
$tgl_transaksi = date('Y-m-d');
$transaksi_id = generateId("TRX", 9);


// insert data
$query = "INSERT INTO transaksi (transaksi_id, created_by, nasabah_id, jumlah, jenis_transaksi, keterangan, tgl_transaksi) VALUES ('$transaksi_id', '$created_by', '$nasabah_id', $jumlah, '$jenis_transaksi', '$keterangan', '$tgl_transaksi')";
$result = $conn->query($query);

// cek query
if ($result) {
    header('Location: ../../index.php?page=transaksi&add=true');
    exit;
} else {
    header('Location: ../../index.php?page=transaksi&add=false');
    exit;
}
