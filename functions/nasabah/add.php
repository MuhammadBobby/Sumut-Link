<?php
// connections
require '../connection.php';
require '../all-functions.php';

// ambil data dari method post
$nik_ktp = htmlspecialchars($_POST['nik_ktp']);
$nama = htmlspecialchars($_POST['nama']);
$alamat = htmlspecialchars($_POST['alamat']);
$nama_ibu_kandung = htmlspecialchars($_POST['nama_ibu_kandung']);
$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
$no_telp = htmlspecialchars($_POST['no_telp']);
$tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);
$tgl_bergabung = date('Y-m-d H:i:s');
$no_cif = generateCIF();

// check nik_ktp
$query = "SELECT * FROM nasabah WHERE nik_ktp = '$nik_ktp'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    header('Location: ../../index.php?page=nasabah&error=nik_ktp_used');
    exit;
}


// insert data
$query = "INSERT INTO nasabah (nik_ktp, no_CIF, nama_lengkap, alamat, no_telepon, nama_ibu_kandung, jenis_kelamin, tgl_lahir, tgl_bergabung) VALUES ('$nik_ktp', $no_cif, '$nama', '$alamat', '$no_telp', '$nama_ibu_kandung', '$jenis_kelamin', '$tgl_lahir', '$tgl_bergabung')";
$result = $conn->query($query);

// cek query
if ($result) {
    header('Location: ../../index.php?page=nasabah&add=true');
    exit;
} else {
    header('Location: ../../index.php?page=nasabah&add=false');
    exit;
}
