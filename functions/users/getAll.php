<?php
// Jumlah data per halaman
$perPage = 10;

// Ambil halaman dari parameter URL (default halaman 1)
$number = isset($_GET['number']) && is_numeric($_GET['number']) ? (int)$_GET['number'] : 1;

// Hitung OFFSET
$offset = ($number - 1) * $perPage;

// Hitung total data dari database
$totalQuery = "SELECT COUNT(*) as total FROM users";
$totalResult = $conn->query($totalQuery);
$totalRow = $totalResult->fetch_assoc();
$totalUsers = $totalRow['total'];

// Hitung jumlah total halaman
$totalPages = ceil($totalUsers / $perPage);

// Query data dengan LIMIT dan OFFSET
$getAll = "SELECT * FROM users ORDER BY created_at DESC LIMIT $perPage OFFSET $offset";
$result = $conn->query($getAll);

// Simpan data ke dalam array
$users = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}
