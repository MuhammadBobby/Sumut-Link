<?php
// connection
require '../connection.php';

// get data post
$nik_ktp = htmlspecialchars($_POST['nik_ktp']);
$nama = htmlspecialchars($_POST['nama']);
$alamat = htmlspecialchars($_POST['alamat']);
$nama_ibu_kandung = htmlspecialchars($_POST['nama_ibu_kandung']);
$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
$no_telp = htmlspecialchars($_POST['no_telp']);
$tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);


// query
$query = "UPDATE nasabah SET nama_lengkap = '$nama', alamat = '$alamat', no_telepon = '$no_telp', nama_ibu_kandung = '$nama_ibu_kandung', jenis_kelamin = '$jenis_kelamin', tgl_lahir = '$tgl_lahir' WHERE nik_ktp = '$nik_ktp'";
$result = $conn->query($query);

if ($result) {
    header('Location: ../../index.php?page=nasabah&update=true');
    exit;
} else {
    header('Location: ../../index.php?page=nasabah&error=update_failed');
    exit;
}
