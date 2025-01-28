<?php
$query = "SELECT * FROM nasabah WHERE nik_ktp = '$id'";
$result = $conn->query($query);
$row = $result->fetch_assoc();

$nasabah = [];
if ($result->num_rows > 0) {
    $nasabah = $row;
}
