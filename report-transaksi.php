<?php
// connection
include 'functions/connection.php';
// import all functions
require 'functions/all-functions.php';
session_start();

// check if user is logged in
if (!isset($_SESSION['access_token']) || empty($_SESSION['access_token'])) {
    header('location: login.php');
    exit();
} else {
    // Get access token from session or cookie
    $access_token = $_SESSION['access_token'] ?? $_COOKIE['access_token'];
    // Get user data
    $user = getMe($access_token);
}


// get data Post
$tgl_mulai = htmlspecialchars($_POST['tgl_mulai']);
$tgl_berakhir = htmlspecialchars($_POST['tgl_berakhir']);
$nasabah_id = htmlspecialchars($_POST['nasabah_id']);
$jenis_transaksi = htmlspecialchars($_POST['jenis_transaksi']);

// get data
include 'functions/reports/transaksi.php';


// header table
$header_table = ['Nasabah', 'NIK', 'No Telp', 'Jenis', 'Jumlah', 'Keterangan', 'Tanggal'];
?>


<?php include 'components/report/header_report.php' ?>

<div>
    <table class="w-full table-auto text-sm text-left text-gray-500 border border-gray-200">
        <thead class="text-xs text-gray-700 uppercase bg-orange-200">
            <tr>
                <?php foreach ($header_table as $header) : ?>
                    <th class="px-1 py-3 border whitespace-nowrap"><?= $header ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transaksi_report as $trx_report) : ?>
                <tr class="bg-white border">
                    <td class="px-1 py-2 border whitespace-nowrap"><?= $trx_report['nama_lengkap'] ?></td>
                    <td class="px-1 py-2 border whitespace-nowrap"><?= $trx_report['nik_ktp'] ?></td>
                    <td class="px-1 py-2 border whitespace-nowrap"><?= $trx_report['no_telepon'] ?></td>
                    <td class="px-1 py-2 border whitespace-nowrap uppercase font-semibold <?= $trx_report['jenis_transaksi'] === 'kredit' ? 'text-red-500' : 'text-emerald-500' ?>"><?= $trx_report['jenis_transaksi'] ?></td>
                    <td class="px-1 py-2 border whitespace-nowrap">Rp <?= number_format($trx_report['jumlah']) ?></td>
                    <td class="px-1 py-2 border whitespace-nowrap"><?= formatDate($trx_report['tgl_transaksi']) ?></td>

                    <td class="px-1 py-2 border max-w-32 truncate whitespace-nowrap"><?= $trx_report['keterangan'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'components/report/footer_report.php' ?>