<?php
$pageAdminAllowed = ['dashboard', 'users', 'edit_user', 'nasabah', 'edit_nasabah', 'detail_nasabah', 'transaksi', 'edit_transaksi'];
$pageTellerAllowed = ['dashboard', 'transaksi', 'edit_transaksi'];
$pageCsAllowed = ['dashboard', 'nasabah', 'edit_nasabah', 'detail_nasabah'];


// Jika halaman tidak ada di daftar halaman yang diperbolehkan, tetap di dashboard
if (!in_array($page, $allowed_pages)) {
    header('Location: ../index.php?page=dashboard');
    exit;
}

// Cek akses berdasarkan role
$roleAccess = [
    'admin' => $pageAdminAllowed,
    'teller' => $pageTellerAllowed,
    'cs' => $pageCsAllowed
];

if (!in_array($page, $roleAccess[$user['role']] ?? [])) {
    header('Location: ../index.php?page=dashboard');
    exit;
}
