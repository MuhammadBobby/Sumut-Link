<?php
$query = "SELECT * FROM transaksi WHERE transaksi_id = '$id'";
$result = $conn->query($query);
$row = $result->fetch_assoc();

$transaksi = [];
if ($result->num_rows > 0) {
    $transaksi = $row;
}
