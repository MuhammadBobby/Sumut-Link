<?php
// Jumlah data per halaman
$perPage = 10;

// Ambil halaman dari parameter URL (default halaman 1)
$number = isset($_GET['number']) && is_numeric($_GET['number']) ? (int)$_GET['number'] : 1;

// Hitung OFFSET
$offset = ($number - 1) * $perPage;

// Hitung total data dari database
$totalQuery = "SELECT COUNT(*) as total FROM nasabah";
$totalResult = $conn->query($totalQuery);
$totalRow = $totalResult->fetch_assoc();
$totalNasabah = $totalRow['total'];

// Hitung jumlah total halaman
$totalPages = ceil($totalNasabah / $perPage);

// Query data dengan LIMIT dan OFFSET
$getAll = "SELECT * FROM nasabah ORDER BY tgl_bergabung DESC LIMIT $perPage OFFSET $offset";
$result = $conn->query($getAll);

// Simpan data ke dalam array
$nasabah = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nasabah[] = $row;
    }
}
