<?php
// Jumlah data per halaman
$perPage = 10;

// Ambil halaman dari parameter URL (default halaman 1)
$number = isset($_GET['number']) && is_numeric($_GET['number']) ? (int)$_GET['number'] : 1;

// Hitung OFFSET
$offset = ($number - 1) * $perPage;

// Hitung total data dari database
$totalQuery = "SELECT COUNT(*) as total FROM transaksi";
$totalResult = $conn->query($totalQuery);
$totalRow = $totalResult->fetch_assoc();
$totalTransaksi = $totalRow['total'];

// Hitung jumlah total halaman
$totalPages = ceil($totalTransaksi / $perPage);

// Query data dengan LIMIT dan OFFSET
$getAll = "SELECT transaksi.*, nasabah.*, users.*
            FROM transaksi
            JOIN nasabah ON transaksi.nasabah_id = nasabah.nik_ktp
            JOIN users ON transaksi.created_by = users.user_id
            ORDER BY tgl_transaksi DESC
            LIMIT $perPage OFFSET $offset;";
$result = $conn->query($getAll);

// Simpan data ke dalam array
$transaksi = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $transaksi[] = $row;
    }
}
