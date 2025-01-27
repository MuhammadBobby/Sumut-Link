<?php
$conn = mysqli_connect("localhost", "root", "", "sumut_link");

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
